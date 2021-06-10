<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'product';

    public function post()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }
}
