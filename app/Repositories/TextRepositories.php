<?php
namespace App\Repositories;

interface TextRepositories{
    public function all();
    public function allCustomer();
    public function allCountry();
    public function createProduct(array $data);
   
}


?>