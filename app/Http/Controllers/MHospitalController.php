<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MClaims;

class MHospitalController extends Controller
{
    public function index(){

        $users = MClaims::selectRaw('count(mh_id) as patient_count, m_claims.npi ,m_claims.provider_full_name,m_npi_data.fax_number,m_taxonomy.taxonomy_code')
                        ->join('m_npi_data','m_claims.npi', '=', 'm_npi_data.npi')
                        ->join('m_taxonomy','m_claims.npi', '=', 'm_taxonomy.npi')
                        ->join('m_hospital','m_claims.mh_id', '=', 'm_hospital.id')
                        ->where('m_claims.status', 'pending')
                        ->groupBy('m_claims.npi')
                        ->get();
            return view('index', compact('users'));      
    }

    public function Hospital(){

        $data = MClaims::/*selectRaw('count(mh_id) as patient_count,npi,provider_full_name')*/
                        where('m_claims.status', 'pending')
                        ->groupBy('m_claims.npi')
                        ->with('taxonomy:taxonomy_code,claims_id')
                        ->with('mnpi:fax_number,claims_id')
                        ->get();
                // dd($data);
                return($data);
        return view('hospital', compact('data'));
    }

}
