<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $softdelete = ['deleted_at'];
    protected $table = "crud";
    protected $fillable = [
        "name",
        "email",
        "role",
        "gender"
    ];

    
}
