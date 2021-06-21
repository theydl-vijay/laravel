<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Userinfo;

class Userinformation extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $account_balance;
    public $age;
    public $gender;
    public $select_id;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required',
        'account_balance' => 'required',
        'age' => 'required',
        'gender' => 'required'
    ];

    public function submit(){

        $validatedata = $this->validate();
        $post = Userinfo::create($validatedata);
        return redirect()->to('/userlist');
    }

    public function render()
    {
        return view('livewire.userinformation');
    }

    public function edit($id){
        $data = Userinfo::find($id);
        $this->id = $data->id;
        $this->name = $data->name;
    }
}



