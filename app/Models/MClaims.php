<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   MClaims extends Model
{
    use HasFactory;
    protected $table = 'm_claims';

    public function mnpi(){
            return $this->hasMany(MNpiData::class,'claims_id');
    }

    public function taxonomy(){
            return $this->hasMany(MTaxonomy::class,'claims_id');
    }


    public function sixth(){
            return $this->belongsToMany(MNpiData::class);
    }

    public function seven(){
        return $this->belongsToMany(MNpiData::class);
    }
}
