<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
use App\Models\Faq;
use App\Models\Inquiry;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Product;
use App;
use App\Mail\InquiryMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Services\SchemaMarkupService;
// use App\Models\Comment;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $schemaMarkupService;

    public function __construct(SchemaMarkupService $schemaMarkupService)
    {
        $this->schemaMarkupService = $schemaMarkupService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $parent_category = Category::where('parent_id',"null")->orwhere('parent_id',null)->get();
        // dd($parent_category);
        $products = Product::orderBy('created_at','DESC')->take(6)->get();
        $blogs = Blog::latest('created_at')->take(4)->get();
        // dd($products);
        return view('welcome',compact('parent_category','products','blogs'));
    }

    public function blog(){
        $blog = Blog::where('status', 'A')->select('id', 'name', 'image','slug','created_at') /* all columns except "body" */
        ->selectRaw('SUBSTRING(`description`, 1, 500) as `description`')
        ->paginate(10); // For Collection
    foreach($blog as $blog_imp)
    {
        $blog_imp->impression = $blog_imp->impression + 1 ;
        $blog_imp->save();
    }
    $blogs = Blog::latest('created_at')->take(4)->get();
    $blog_category = BlogCategory::where('status','A')->get();
    // dd($blog_category);
    // dd($blog);
    return view('blog', compact('blogs','blog_category','blog'));
        // return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function blogCategory($slug){
        $blog_category = BlogCategory::where('slug',$slug)->first();
        $blog = Blog::where('category_id',$blog_category->id)->select('id', 'name', 'image','slug','created_at') /* all columns except "body" */
        ->selectRaw('SUBSTRING(`description`, 1, 500) as `description`')
        ->paginate(6);
        // dd($blog);
    foreach($blog as $blog_imp)
    {
        $blog_imp->impression = $blog_imp->impression + 1 ;
        $blog_imp->save();
    }
    $blogs = Blog::latest('created_at')->take(4)->get();
    $blog_category = BlogCategory::where('status','A')->get();
    return view('blog', compact('blogs','blog_category','blog'));
    }

    public function blogList($slug){
        $blog = Blog::where('slug',$slug)->where('status','A')->first();
        $top = Blog::latest('created_at')->take(4)->get();
        $most_view = Blog::orderBy("total_view", "desc")->get();
        $category = BlogCategory::where('id',$slug)->first();
        if (!is_null($blog)) {
            $blog->total_view = $blog->total_view + 1 ;
            $blog->save();
            $categories = BlogCategory::where('status','A')->get();
            $schemaMarkup = json_encode($this->schemaMarkupService->generateBlogPostSchema($blog));
            return view('single', compact('blog', 'categories','category','top','most_view','schemaMarkup'));
        } else {
            abort(404);
        }
      
    }
    public function about(){
        return view('about');
    }
    public function history(){
        return view('history');
    }
    public function faq(){
        $faqs = Faq::all();
        return view('faq',compact('faqs'));
    }
    public function terms(){
        return view('term');
    }
    public function policy(){
        return view('privacy-policy');
    }
    public function drug(){
        return view('drug-policy');
    }
    public function refund(){
        return view('refund');
    }
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
    public function management(){
        return view('management');
    }
    public function QulityPolicy(){
        return view('qulitypolicy');
    }
    public function clientSatisfaction(){
        return view('client-satisfaction');
    }
    public function manufacturing(){
        return view('manufacturing');
    }
    public function packaging(){
        return view('packing');
    }
    public function research(){
        return view('research');
    }
    public function contract_manufacturing(){
        return view('contract_manufacturing');
    }
    public function third_party_manufacturing(){
        return view('third_party_manufacturing');
    }
    public function institutional_tenders(){
        return view('institutional_tenders');
    }
    public function generic_medicine(){
        return view('generic_medicine');
    }
    public function otc_products(){
        return view('otc_products');
    }
    public function regulatory(){
        return view('regulatory');
    }
    public function qa_and_qc(){
        return view('qa_and_qc');
    }
    public function product_list(){
        $parent_category = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
        $all_child_category = Category::where('parent_id','!=' ,null)->get();
        $products = Product::all();
        return view('productlist',compact('parent_category','all_child_category','products'));
    }

    public function category_list(Request $request,$slug){    
   
        $parent_category = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
        $all_child_category = Category::where('parent_id','!=' ,null)->get();
        $categories = Category::where('slug',$slug)->first();
        $products = Product::where('subcategory_id',$categories->id)->with('category')->get();
            return view('category_list',compact('categories','parent_category','all_child_category','products'));
    }

    public function global_presence(){
                
        return view('global_presence');
    }

    public function product_single(Request $request,$slug){
        $current = url()->full();
        $links = \App\Models\Seo::where('direct', $current)->first();
        if ($links) {
            return Redirect::to($links->redirect, 301);
        }else{
            $parent_category = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
            $all_child_category = Category::where('parent_id','!=' ,null)->get();
            $product = Product::where('slug',$slug)->with('subCategory','category')->first();
            $schemaMarkup = json_encode($this->schemaMarkupService->generateProductSchema($product));
            // dd($product->subCategory->name);
            return view('product_single',compact('parent_category','all_child_category','product','schemaMarkup'));
        }
       
    }

    public function parent_category(Request $request,$slug){
        $parent_category = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
        $all_child_category = Category::where('parent_id','!=' ,null)->get();
        $category_id = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category_id->id)->get();
        return view('category_single',compact('parent_category','all_child_category','products','category_id'));
    }

    public function search(Request $request){
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $results = Product::where('name', 'like', $keyword . '%')
                ->limit(6)
                ->get();
                $df ='';
                $df.= '<ul id="search-list">';
                foreach($results as $result){
                $df .= '<li><a href="/product/'.$result->slug.'"><img class="me-2" src="/'.$result->image.'" width="55px">'.$result->name.' </a></li>';
                }
                $df .= '</ul>';
                
            return response()->json($df);
        }
    }

    public function inquiry(Request $request){
            $inquiry = new Inquiry;
            $inquiry->product_name = $request->title;
            $inquiry->name = $request->name;
            $inquiry->inquiry_solve = 'Pending';
            $inquiry->phone = $request->phone;
            $inquiry->email = $request->email;
            $inquiry->company_name = $request->company_name;
            $inquiry->message = $request->message;
            $inquiry->prefer = json_encode($request->prefer);
            $inquiry->save();
            Mail::to('inquiry@weloxpharma.com')->send(new InquiryMail($inquiry));
            return redirect()->back();
    }
}
