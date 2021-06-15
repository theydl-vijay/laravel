<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encounters extends Model
{
    use HasFactory;
    protected $table = 'encounters';
    
    public function encounter(){

        return $this->belongsToMany(Claims::class);
    }
}
