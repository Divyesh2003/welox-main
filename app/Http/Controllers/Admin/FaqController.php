<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\DataTables\FaqDataTable;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FaqDataTable $dataTable)
    {
           return $dataTable->render('admin.faq.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faq = new Faq;
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->save();
        return redirect(route('admin.faq.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        if (!is_null($faq)) {
            return view('admin.faq.edit',compact('faq'))->with('warning','Category Created Successfully');
        } else {
            return redirect()->route('admin.faq.index')->with('error','Category not Exists');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $inquiry = Faq::find($id);
        $inquiry->title = $request->title;
        $inquiry->description = $request->description;
        $inquiry->save();
        return redirect()->route('admin.faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        if(!is_null($faq)){
            return redirect()->route('admin.faq.index');
        }else{
            abort(404);
        }
    }
}
