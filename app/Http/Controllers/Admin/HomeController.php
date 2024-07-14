<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function profile(){
        $auth = Auth::guard('admin')->user();

        return view('admin.profile',['auth'=>$auth]);
    }

    public function profileUpdate(Request $request){
       $auth = Auth::guard('admin')->user();
       $admin = Admin::where('id', $auth->id)->first();
       $admin->name = $request->name;
       $admin->email = $request->email;
       if (!empty($request->password)) {
        $admin->password = Hash::make($request->password);
    }
    //    $admin->password = encrypt($request->password);
    //    dd($admin);
    //    $2y$10$oiIcq/pMx0T2rSNPl778TOvPDwiE7/JnWe2xUbwUJ4zwoy4ZypfpG
       $admin->save();
       return view('admin.profile',['auth'=>$auth]);
    }
}