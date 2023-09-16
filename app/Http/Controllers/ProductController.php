<?php

namespace App\Http\Controllers;

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
       return redirect('/products');

   }
}
