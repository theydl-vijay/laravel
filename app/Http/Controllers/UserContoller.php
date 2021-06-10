<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\User;

class UserContoller extends Controller
{
    // one to many for get wishlist table

    public function index(){

        return Product::find(4)->post;
    }

    //  many to many for get Wishlist Table
    public function user(){

        return User::find(2)->post;
    }

    // using inverse for user 
    public function inverseUser(){

        return Wishlist::find(4)->dataOne;
    }

    // using inverse for product
    public function inverseProduct(){

        return Wishlist::find(4)->dataTwo;
    }

    // using inverse for product from productVariant
    public function product(){

        return ProductVariant::find(2)->post;
    }

    // has many 
    public function HasMany(){
        return Wishlist::find(2)->postOne;
    }
}
