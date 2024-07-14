<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Url;
use Illuminate\Http\Request;
use App\DataTables\BlogCategoryDataTable;
use App\Requests\BlogCategoryCreateRequest;
use App\Requests\BlogCategoryUpdateRequest;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Auth;
class BlogCategoryController extends Controller
{
    // login user id
     public $user_id;


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
        $this->middleware(function ($request, $next) {
            if(Auth::user())
            {
                $this->user_id= Auth::user()->id;
                return $next($request);
            }
            else
            {
                return $next($request);
            }
        });
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BlogCategoryDataTable $dataTable)
    {
            // dd("hello");
        //     $blogcategory = BlogCategory::paginate($number);
        //     return view('admin.blog.category.index', compact('blogcategory'));
        return $dataTable->render('admin.blog.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $categories=BlogCategory::all();
        return view('admin.blog.category.create',compact('users','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryCreateRequest $request)
    {
        $myimage = "null";
        if ($request) {
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $valdater=$request->validated();
        $blogcategory=new BlogCategory;
        $blogcategory->parent_id=$request->parent_id;
        $blogcategory->name=$request->name;
        $blogcategory->slug=$request->slug;
        $blogcategory->description=$request->description;
        $blogcategory->image = $myimage;
        $blogcategory->meta_title=$request->meta_title;
        $blogcategory->meta_description=$request->meta_description;
        $blogcategory->meta_keyword=$request->meta_keywords;
        $blogcategory->status=$request->status;
        if($blogcategory->status=='1')
        {
                $blogcategory->status='1';
        }
        else {
                $blogcategory->status='0';
        }
        $blogcategory->created_by = $this->user_id;
        $blogcategory->save();
        return redirect()->route('admin.blog.category.index')->with('success','Blog Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $blogcategory = BlogCategory::find($id);
            if(!is_null($blogcategory)){
                return view('admin.blog.category.show', compact('blogcategory'));
            }else{
                // abort(404);
            return redirect()->route('admin.cms.blog.category.index')->with('error','Blog Category not Exists');

            }
    }
    /**
     * Show the form  for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $category = BlogCategory::find($id);
            $categories=BlogCategory::all();
            if(!is_null($category)){
                return view('admin.blog.category.edit', compact('categories','category'))->with('warning','Blog Category Created Successfully');
            }else{
                // abort(404);
            return redirect()->route('admin.blog.category.index')->with('error','Blog Category not Exists');
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryUpdateRequest $request,$id)
    {
        // dd($request);
        $myimage = NULL;
        // dd($request->input());
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        if(!is_null($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets\img'), $imageName);
            $myimage = '/assets/img/' .$imageName;
        }
            /* Store $imageName name in DATABASE from HERE */
        }
        $valdater=$request->validated();
        $blogcategory=BlogCategory::find($id);
        $blogcategory->parent_id=$request->parent_id;
        $blogcategory->name=$request->name;
        $blogcategory->slug=$request->slug;
        $blogcategory->description=$request->description;
        if($myimage != "")
        $blogcategory->image =  $myimage;
        $blogcategory->meta_title=$request->meta_title;
        $blogcategory->meta_description=$request->meta_description;
        $blogcategory->meta_keyword=$request->meta_keywords;
        $blogcategory->status=$request->status;
        if($blogcategory->status=='1')
        {
                $blogcategory->status='1';
        }
        else {
                $blogcategory->status='0';
        }
        $blogcategory->updated_by = $this->user_id;
        $blogcategory->save();
        // $url = Url::where('parent_id',$blogcategory->id)->where('entity_type','blogcategory')->first();
        // $url->slug = $request->slug;
        // $url->created_by = $this->user_id;
        // $url->save();
        return redirect()->route('admin.blog.category.index')->with('success','Blog Category Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $blogcategory = BlogCategory::find($id);
            if(!is_null($blogcategory)){
                $blogcategory->delete();
                return redirect()->route('admin.blog.category.index')->with('warning','Blog Category Deleted Successfully');;
            }else{
            return redirect()->route('admin.blog.category.index')->with('error','Blog Category not Exists');
            }
    }
}
