<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\DataTables\ProductDataTable;
use Illuminate\Support\Facades\Auth;
use App\Requests\ProductCreateRequest;
use App\Requests\ProductUpdateRequest;
use App\Http\Controllers\Admin\ImageController;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::where('parent_id',null)->get();
        $categories = Category::where('parent_id',null)->orwhere('parent_id','null')->get();
        $subCategories = Category::where('parent_id','!=' ,null)->get();

        return view('admin.product.create', compact('categories','subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        // dd($request);
       $myimage = "null";
       if ($request->image){
           $image = new ImageController;
           $myimage = $image->index($request);
       }
       $i = array();
       $gallary = null;
        if ($request->gallery){
            foreach ($request->gallery as $img) {
                $image = new ImageController;
                $gl = $image->multiimage($img);
                array_push($i, $gl);
            }
        }
        $gallary = json_encode($i);
        // dd($gallary);
       $validate = $request->validated();
       $product = new Product;
       $product->category_id = $request->category_id;
       $product->subcategory_id = $request->subcategory_id;
       $product->name = $request->name;
       $product->slug = $request->slug;
       $product->available_strength = $request->available_strength;
       $product->description = $request->description;
       $product->image =  $myimage;
       $product->gallery =  $gallary;
       $product->trade_name = $request->trade_name;
       $product->packing = $request->packing;
       $product->pack_insert_leaflet = $request->pack_insert_leaflet;
       $product->therapeutic_use = $request->therapeutic_use;
       $product->production_capacity = $request->production_capacity;
       $product->meta_title = $request->meta_title;
       $product->meta_description = $request->meta_description;
       $product->meta_keywords = $request->meta_keywords;
       $product->status = ($request->status == 'A')? true : false;
       $product->save();
       return redirect()->route('admin.product.index')->with('success','Product Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            return view('admin.product.show', compact('product'));
        } else {
            return redirect()->route('admin.product.index')->with('error','Product not Exists');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            //  $products = Product::all();
            $categories = Category::all();
            return view('admin.product.edit', compact('product','categories'))->with('warning','Product Created Successfully');
        } else {
            return redirect()->route('admin.catalog.category.index')->with('error','Category not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request,  $id)
    {
        $myimage = "null";
        if ($request->image){
            $image = new ImageController;
            $myimage = $image->index($request);
        }
        $i = array();
        $gallary = null;
         if ($request->gallery){
             foreach ($request->gallery as $img) {
                 $image = new ImageController;
                 $gl = $image->multiimage($img);
                 array_push($i, $gl);
             }
         }
         $gallary = json_encode($i);
        $validate = $request->validated();
        $product= Product::find($id);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        if($request->image != "")
        {
            // $blog->image = $myimage;
            $product->image =  $myimage;
        }
        if($request->gallery != "")
        {
            $product->gallery =  $gallary;
        }
        $product->trade_name = $request->trade_name;
        $product->packing = $request->packing;
        $product->pack_insert_leaflet = $request->pack_insert_leaflet;
        $product->therapeutic_use = $request->therapeutic_use;
        $product->production_capacity = $request->production_capacity;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->status = ($request->status == 'A')? true : false;
        $product->save();
      return redirect()->route('admin.product.index')->with('success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(!is_null($product)){
            $product->delete();
            return redirect()->route('admin.product.index');
        }else{
            abort(404);
        }
    }
}