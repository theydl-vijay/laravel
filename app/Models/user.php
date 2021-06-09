<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = [

        'name',
        'email',
        'password',
        'active',
        'role',
    ];

    protected $casts = [

        'name'=> 'string',
        'email'=> 'string',
        'password'=> 'string',
        'active'=> 'boolean',
        'role'=> 'string',
    ]; 
}
