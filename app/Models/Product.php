<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded= ['id'];

    public function arrange(){
        return $this->belongsTo(Customer::class,'customer_id', 'id');
    }
}
