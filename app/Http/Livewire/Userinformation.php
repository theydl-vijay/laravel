<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Userinfo;

class Userinformation extends Component
{
    public $name;
    public $email;
    public $user_id;
    public $phone_number;
    public $account_balance;
    public $age;
    public $gender;
    
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

    public function edit($id)
    {
        $record = Userinfo::find($id);
        // $this->id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->phone_number = $record->phone_number;
        $this->account_balance = $record->account_balance;
        $this->age = $record->age;
        $this->gender = $record->gender;
    }
    
    public function render()
    {
        return view('livewire.userinformation');
    }
}



