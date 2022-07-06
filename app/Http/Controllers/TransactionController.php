<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;

class TransactionController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
   	 $items = Customer::all();
    	 return view('pages.transactions.index',['items' => $items]);
   }
   
}
