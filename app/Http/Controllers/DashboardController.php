<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Customer;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      $total_product = Product::count();
      $total_customer = Customer::count();
      $total_pending = Product::where('status','=','0')->count();
      $total_payment = Product::where('status','=','1')->count();
      $total_cancel = Product::where('status','=','2')->count();
      $total_lunas = DB::table('customers')
              ->join('products', 'products.id_products', '=', 'customers.id_products')
              ->where('products.status','=','1')
              ->sum(DB::raw('products.price * customers.quantity'));
      $total_pendingsum = DB::table('customers')
              ->join('products', 'products.id_products', '=', 'customers.id_products')
              ->where('products.status','=','0')
              ->sum(DB::raw('products.price * customers.quantity'));
      $total_cancelsum = DB::table('customers')
              ->join('products', 'products.id_products', '=', 'customers.id_products')
              ->where('products.status','=','2')
              ->sum(DB::raw('products.price * customers.quantity'));
      return view('pages.dashboard',compact('total_product','total_customer','total_pending','total_payment','total_cancel','total_lunas','total_pendingsum','total_cancelsum'));  
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
