<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      $total_product = Product::count();
      $total_customer = Customer::count();
      return view('pages.dashboard',compact('total_product','total_customer'));  
    }

    public function approved($id){
      Product::where('id',$id)->update([
          'status' => 1
      ]);

      return redirect()->back();
 
}

    public function rejected($id){
          Product::where('id',$id)->update([
              'status'=> 2
          ]);

          return redirect()->back();
    }
    
}
