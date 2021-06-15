<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Userinfo;

class Userinformation extends Component
{
    public $name;
    public $email;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function submit(){
        $validatedata = $this->validate();
        Userinfo::create($validatedata);
        // session()->flash('success');
        
        return redirect()->to('/userinfo');
    }

    public function render()
    {
        return view('livewire.userinformation');
    }
}



