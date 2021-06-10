<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{

    use HasFactory;
    public $table = 'product_variant';

    public function post(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    

}