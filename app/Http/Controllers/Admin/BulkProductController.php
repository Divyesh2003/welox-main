<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;
use App\Models\Product;
use ZanySoft\Zip\Zip;
class BulkProductController extends Controller
{
  public function index(){
    return view('admin.bulk.index');
  }
  public function store(){

    if(request()->hasFile('bulk_excel')){
      Excel::import(new ProductImport, request()->file('bulk_excel')->store('temp'));
      // Get the uploaded file
      $zipFile = request()->file('bulk_image');
      // Specify the directory where you want to store the uploaded ZIP file
      $destinationPath = public_path('uploads');
      // Store the ZIP file
        $zipFile->move($destinationPath, $zipFile->getClientOriginalName());
        // Perform ZIP operations using ZanySoft\Zip
        $zip = new Zip();
        $string = explode('.zip',$zipFile->getClientOriginalName());
       $repair = $zip->open($destinationPath . '/' . $zipFile->getClientOriginalName());
      $a = $repair->extract(public_path() .'/'. $string[0]);
        // Close the ZIP file
        $zip->close();
        // You can also remove the uploaded ZIP file if needed
        unlink($destinationPath . '/' . $zipFile->getClientOriginalName());
  }
  return redirect()->back();
  }
}
