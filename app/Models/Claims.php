<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claims extends Model
{
    use HasFactory;
    protected $table = 'claims';

    public function claim(){

        return $this->hasMany(Encounters::class, 'h_id');
    }

    public function claims(){

        return $this->belongsToMany(Encounters::class,'claims_encounters','claims_id','encounters_id');
    }
}
