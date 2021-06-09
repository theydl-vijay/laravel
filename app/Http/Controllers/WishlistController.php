<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
     public function wishlist()
    {
        $wishlist = Post::all();
        return $wishlist;
    }   
}
