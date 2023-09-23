<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountryResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
// use App\Models\Product;
use App\Repositories\TextRepositories;

class ProductController extends Controller
{
   private $product;
  
   public function __construct(TextRepositories $product){
    
     $this->product= $product;
   } 
   public function index(){
    $products = $this->product->all(); 
    // $products = Product::all(); 
 
    return view('product.index', compact('products'));
   }

   public function createPage(){
    return view('product.create');
   }
   public function store(Request $request){
       $data = $request->all();
       $this->product->createProduct($data);
       return redirect('/');

   }

   public function apistore(Request $request){
    $data = $request->all();
    $this->product->createProduct($data);
    return response()->json([
      'status'=>'success',
      'message'=>'data insert successfully'
    ]);
   }

   public function getproduct(Request $request){
    $products =ProductResource::collection($this->product->all()) ; 
    return $products;
   }
   public function getcustomer(Request $request){
    $products =CustomerResource::collection($this->product->allCustomer()) ; 
    return $products;
   }
   public function getcountry(Request $request){
    $products =CountryResource::collection($this->product->allCountry()) ; 
    return $products;
   }
}
