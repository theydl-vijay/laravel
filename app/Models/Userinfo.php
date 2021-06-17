<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'account_balance',
        'age',
        'gender'
    ];

    const gender = [
        'male' => 'male',
        'female' => 'female'        
    ];
}