<?php

namespace App\Http\Livewire;
use App\Models\UserDetails;
use App\Models\Userinfo;

use Livewire\Component;

class Userdetail extends Component
{   

    
    protected $rules = [

        
    ];

    public function submit(){

        function request(Request $request){

            $validatedata = $this->validate();
            $details = UserDetails::create();
            $user = Userinfo::find($request->$i);
        }



        return redirect()->to('/userlist');
        session()->flash('success');
    }
    
    public function render()
    {
        return view('livewire.userdetail');
    }
}
