<?php

namespace App\Http\Livewire;
use App\Models\UserDetails;
use App\Http\Livewire\Userinformation;

use Livewire\Component;

class Userdetail extends Component
{   
    public $phone_number;
    public $account_balance;
    public $age;
    public $gender;
    
    protected $rules = [
        'phone_number' => 'required',
        'account_balance' => 'required',
        'age' => 'required',
        // 'gender' => 'required'
    ];

    public function submit(Request $request){
        $validatedata = $this->validate();
        $details = UserDetails::create([
            'phone_number' =>  $request->phone_number,
            'account_balance' =>  $request->account_balance,
            'age' =>  $request->age,
            'user_id' => Auth::Userinformation()->id
        ]);

        // $details->codec()->attach([codec_ids]);

        session()->flash('success');
        return redirect()->to('/userlist');
    }
    
    public function render()
    {
        return view('livewire.userdetail');
    }
}
