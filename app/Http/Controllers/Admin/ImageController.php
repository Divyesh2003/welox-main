<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
class ImageController extends Controller
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
            }
            return $next($request);
        });
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $myimage =null;
        $year = date("Y");
        $month = date("m");
        $day = date("d");
        $directory = "".$year."/".$month."/".$day."/";
        if(!is_dir($directory)){
            mkdir($directory, 755, true);
        }
        if ($request->hasFile('image'))
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if(!is_null($request->image))
            {
                $image = $request->image->getClientOriginalName();
                $image = pathinfo($image,PATHINFO_FILENAME);
                $imageName = $image . '_' . date('H-i-s') . '.' . $request->image->extension();  
                $request->image->move(public_path("$directory"), $imageName);
                $myimage = "$directory".$imageName;
            }
        }
        return $myimage;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function multiimage($request)
    {
        $myimage =null;
        $year = date("Y");
        $month = date("m");
        $day = date("d");
        $directory = "$year/$month/$day/";
        //If the directory doesn't already exists.
        if(!is_dir($directory)){
            //Create our directory.
            mkdir($directory, 755, true);
        }
        if ($request)
        {
            if(!is_null($request))
            {
                $image = $request->getClientOriginalName();
                $image = pathinfo($image,PATHINFO_FILENAME);
                $imageName = $image . '_' . date('H-i-s') . '.' . $request->extension();
                $request->move(public_path("$directory"), $imageName);
                $myimage = "$directory".$imageName;
            }
        }
        return $myimage;
    }
}
