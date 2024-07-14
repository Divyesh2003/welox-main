<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\DataTables\BlogDataTable;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Requests\BlogCreateRequest;
use App\Requests\BlogUpdateRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BlogDataTable $dataTable)
    {
        return $dataTable->render('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(BlogCreateRequest $request)
     {
         $myimage = "null";
         if ($request->image){
             $image = new ImageController;
             $myimage = $image->index($request);
         }
         $validate=$request->validated();
         $blog= new Blog;
         $blog->category_id=$request->category_id;
         $blog->name=$request->name;
         $blog->slug=$request->slug;
         $blog->description = $request->description;
         $blog->image =  $myimage;
         $blog->meta_title=$request->meta_title;
         $blog->meta_description=$request->meta_description;
         $blog->meta_keywords=$request->meta_keywords;
         $blog->total_view = 0;
         $blog->featured_show=$request->featured_show;
         if($blog->featured_show=='True')
         {
             $blog->featured_show='True';
         }
         else 
         {
             $blog->featured_show='False';
         }
         $blog->status=$request->status;
         if($blog->status=='A')
         {
             $blog->status='A';
         }
         else 
         {
             $blog->status='D';
         }
         $blog->created_by = 1;
         // dd($blog);
         $blog->save();
         return redirect()->route('admin.blog.index');
     }
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Blog  $blog
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $blog = Blog::find($id);
         if(!is_null($blog)){
             return view('admin.blog.show', compact('blog'));
         }else{
             abort(404);
         }
           
     }
    /**
     * Show the form  for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = BlogCategory::all();
        if(!is_null($blog)){
            return view('admin.blog.edit', compact('blog','categories'));
        }else{
            abort(404);
        }
        return view('admin.blog.edit', compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request,$id)
    {
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $validate=$request->validated();
        $blog= Blog::find($id);
        $blog->category_id=$request->category_id;
        $blog->name=$request->name;
        $blog->slug=$request->slug;
        $blog->description=$request->description;
        if($request->image != "")
        {
            $blog->image = $myimage;
        }
        $blog->meta_title=$request->meta_title;
        $blog->meta_description=$request->meta_description;
        $blog->meta_keywords=$request->meta_keywords;
        $blog->featured_show=$request->featured_show;
        if($blog->featured_show=='True')
        {
            $blog->featured_show='True';
        }
        else 
        {
            $blog->featured_show='False';

        }
        $blog->status=$request->status;
        if($blog->status=='A')
        {
            $blog->status='A';
        }
        else 
        {
            $blog->status='D';
        }
        $blog->save();
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if(!is_null($blog)){
            $blog->delete();
            return redirect()->route('admin.blog.index');
        }else{
            abort(404);
        }
    }
}
