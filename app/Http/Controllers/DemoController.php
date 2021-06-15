<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MHospital;
use App\Models\MClaims;

class DemoController extends Controller
{
    public function First(){
        $data = MHospital::with('first')
                        ->get();
        return $data;
        return view('hospital', compact('data'));
    }

    public function second(){
        $data = MHospital:: with(["second" => function($q){
                            $q->where('m_claims.status', '=', 'pending');
                        }])->get();
        return $data;
    }

    public function third(){
        $data  = MHospital::with(["third" => function($q){
                    $q->where('m_npi_data.npi', '=', 987);    
                }])
                ->get();
                dd($data);
        return $data;
    }

    public function fourth(){
        return $data = MHospital::has('fourth','>','1')->get();
    }

    public function fifth(){
        return $data = MHospital::with('fifth')->get();

    }

    public function sixth(){
        return $data = MClaims::with(["sixth" => function ($q){
            $q->select('fax_number','npi');
                // ->where('m_npi_data.npi', '=', '789')
                // ->groupBy('npi');
        }])
        ->where('m_claims.status','pending')
        ->groupBy('npi')
        ->get();
    }

    public function seven(){
        return $data = MClaims::with(["seven" => function ($q){
            $q->select('fax_number')
                ->groupBy('npi');
        }])
        ->groupBy('npi')
        ->where('m_claims.status', 'complete')
        ->get();

        // dd($data);
    }   
}
