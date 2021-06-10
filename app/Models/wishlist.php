<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';

    public function dataOne(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dataTwo(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function postOne(){
        return $this->hasMany(Wishlist::class, 'user_id');  
    }
}
