<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\DataTables\InquiryDataTable;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\InquiryCreateRequest;
use App\Http\Requests\InquiryUpdateRequest;
use Illuminate\Support\Facades\Auth;
class InquiryController extends Controller
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
    public function index(InquiryDataTable $dataTable)
    {
           return $dataTable->render('admin.inquiry.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= User::all();  
        $products= Product::all();    
        return view('admin.inquiry.create',compact('users','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InquiryCreateRequest $request)
    {
        $validator = $request->validated();
        $inquiry = new Inquiry;
        $inquiry->user_id = $request['user_id'];
        $inquiry->product_id = $request['product_id'];
        $inquiry->subject= $request['subject'];
        $inquiry->description = $request['description'];
        // $bank->address_id = $request['address_id'];
        // $bank->city_id = $request['city_id'];
        $inquiry->save();
        $inquiry->created_by = $this->user_id;
            return redirect(route('admin.inquiry.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $inquiry = Inquiry::find($id);
            if(!is_null($inquiry)){
                // $inquiry->inquiry_solve = 'Complate';
                // $inquiry->save();
                return view('admin.inquiry.show', compact('inquiry'));
                return redirect()->back();
            }else{
                abort(404);
            }   
    }

    /**
     * Show the form  for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $inquiry = Inquiry::find($id);
            $users= User::all();  
            $products= Product::all();
            if(!is_null($products)){
                return view('admin.inquiry.edit', compact('inquiry','users','products'));
            }else{
                abort(404);
            }
           

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(InquiryUpdateRequest $request, $id)
    {
          
        $validater = $request->validated();

        $inquiry = Inquiry::find($id);
        $inquiry->product_id = $request->product_id;
        $inquiry->user_id= $request->user_id;
        $inquiry->subject= $request->subject;
        $inquiry->description= $request->description;
        $inquiry->updated_by = $this->user_id;
        $inquiry->save();
        return redirect()->route('admin.inquiry.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $inquiry = Inquiry::find($id);
            $inquiry->delete();
            if(!is_null($inquiry)){
                return redirect()->route('admin.inquiry.index');
            }else{
                abort(404);
            }
            

    }
}