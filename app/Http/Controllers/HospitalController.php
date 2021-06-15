<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Claims;
use App\Models\Encounters;
use App\Models\Hospital;

class HospitalController extends Controller
{

    // one to many reletion ====
 
    public function hasMany(){
        return Claims::select('mrn')
                ->withCount('claim')
                ->get();
    }

    public function claims(){
       return $data = Encounters::select('mrn')
                    ->selectRaw('count(mrn) as mrn_count')
                    ->groupBy('mrn')
                    ->get();
}

