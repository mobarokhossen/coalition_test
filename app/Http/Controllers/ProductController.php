<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\Product;
use Redirect;
use Validator;
use Session;

class ProductController extends Controller
{
    //
     public function save_product(Request $request){
          
           $validator = Validator::make($request->all(), [
                      'product_name' => 'required',
                      'quantity_in_stock' => 'required',
                      'price_per_item' => 'required',
          ]);

          if ($validator->fails()) {

               $request->session()->flash('error', "please fill up all required field");

               return redirect()->back()->withErrors($validator)->withInput();
          } else {
               $saveProduct = new product;
               $saveProduct->product_name = $request->product_name;
               $saveProduct->quantity_in_stock = $request->quantity_in_stock;
               $saveProduct->price_per_item = $request->price_per_item;
               $saveProduct->submitted = date("Y-m-d H:i:s");
               $saveProduct->total_value_number = $request->quantity_in_stock * $request->price_per_item;

               $saveProduct->save();

               if ($saveProduct->id > 0) {
                    $request->session()->flash('message', "Product Added successfully");
               } else {
                    $request->session()->flash('error', "Failure to Product add");
               }

               return redirect()->back();
          }
          
     }
}
