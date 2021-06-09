<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUplodeController extends Controller
{
    public function index(){
        return view('FileUplode');
    }

    public function uplode(Request $request){
        return $request->file('file')->store('fileupload','public');
    }

}
