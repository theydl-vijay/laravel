<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MHospital extends Model
{
    use HasFactory;
    protected $table = 'm_hospital';

    public function First(){
            return $this->hasOne(MClaims::class, 'mh_id');
    }

    public function second(){
            return $this->hasOne(MClaims::class, 'mh_id');
    }

    public function third(){
            return $this->hasOne(MNpiData::class, 'claims_id');
    }

    public function fourth(){
            return $this->hasMany(MClaims::class, 'mh_id');
    }


    public function fifth(){
        return $this->hasManyThrough(MTaxonomy::class, MClaims::class,'mh_id','claims_id','id','id');
    }
}
