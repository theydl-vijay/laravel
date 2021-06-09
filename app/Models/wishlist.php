<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlist_product';
    protected $fillable = [
        'user_id',
        'product_id',
        'product_description',
        'product_name',
        'votes',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'product_id' => 'integer',
        'product_description' => 'string',
        'product_name' => 'string',
        'votes' => 'integer',
    ];
}
