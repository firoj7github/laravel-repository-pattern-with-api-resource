<?php
namespace App\Repositories;
use App\Models\Product;



class ImplementTextRepositories implements TextRepositories{
    public function all(){
        return Product::get();
    }

    public function createProduct(array $data){
        Product::insert([

        ]);
    }
}





?>