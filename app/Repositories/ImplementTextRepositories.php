<?php
namespace App\Repositories;

use App\Models\Country;
use App\Models\Customer;
use App\Models\Product;



class ImplementTextRepositories implements TextRepositories{
    public function all(){
        return Product::get();
       
    }
    public function allCustomer(){
        return Customer::get();
       
    }
    public function allCountry(){
        return Country::get();
       
    }

    public function createProduct(array $data){
     
        Product::insert([
           'name'=>$data['name'],
           'category'=>$data['category'],
           'price'=>$data['price'],
           'customer_id'=>$data['customer_id'],
        ]);
    }
}





?>