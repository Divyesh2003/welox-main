<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\DataTables\CategoryDataTable;
use App\Requests\CategoryCreateRequest;
use App\Requests\CategoryUpdateRequest;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create', compact('categories',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryCreateRequest $request)
    {
        
        // dd($request);
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
   
        $validate = $request->validated();
        $category = new Category;
        $category->parent_id = json_encode($request->parent_id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->image =  $myimage;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->status = ($request->status == 'A')? true : false;
        $category->save();
        return redirect()->route('admin.category.index')->with('success','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            return view('admin.category.show', compact('category'));
        } else {
            return redirect()->route('admin.catalog.category.index')->with('error','Category not Exists');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
             $categories = Category::all();
            return view('admin.category.edit', compact('category','categories'))->with('warning','Category Created Successfully');
        } else {
            return redirect()->route('admin.catalog.category.index')->with('error','Category not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request,  $id)
    {
          $myimage = "null";
          if ($request->image){
              $image = new ImageController;
              $myimage = $image->index($request);
          }
        $validate = $request->validated();
        $category = Category::find($id);
        $category->parent_id = $request->parent_id;
        $category->name = $request->name;
        $category->slug = $request->slug;
        if($myimage != "null"){
            $category->image =  $myimage;
        }
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->status = ($request->status == '1')? true : false;
        $category->save();
        return redirect()->route('admin.category.index')->with('success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            $category->delete();
            return redirect()->route('admin.category.index')->with('warning','Category Deleted Successfully');
        } else {
            return redirect()->route('admin.category.index')->with('error','Category not Exists');
        }
    }
}
