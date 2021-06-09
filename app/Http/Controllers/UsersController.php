<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function insert(){
        $dropdown = ['admin','user','client'];
        return view ('insert', compact('dropdown'));

        return view('insert');    
    }

    // public function insertpost(Request $request){

    //     $post = new Users();
    //     $post->name = $request->name;
    //     $post->email = $request->email;
    //     $post->role = $request->role;
    //     $post->gender = $request->gender;
    //     $post->save();
    //     if ($post) {
    //         return redirect ('view');
    //     }
    // }

    public function fetch(){ 
        $post = Users::orderBy('id','DESC')->get();
        return view('view', compact('post'));    
    }

    public function edit($id){

        $post = Users::find($id);
        return view('edit', compact('post'));
    }

    // public function update(Request $request){

    //     $post = Users::find($request->id);
    //     $post->name = $request->name;
    //     $post->email = $request->email;
    //     $post->role = $request->role;
    //     $post->gender = $request->gender;
    //     $post->save();
    //     if ($post) {
    //         return redirect('view');
    //     }
    // }

    public function delete($id){
        Users::where('id',$id)->delete();
        return redirect('view');
    }

    public function UpdateorInsert(Request $request){
        DB::table('crud')->updateOrInsert(
            [
                'email' => $request->get('email'),
            ],
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'role' => $request->get('role'),
                'gender' => $request->get('gender')
            ]
        );
            return redirect('view');
    }
}
