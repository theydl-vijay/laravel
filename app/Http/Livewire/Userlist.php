<?php

namespace App\Http\Livewire;

use App\Models\Userinfo;
use Livewire\Component;
use Livewire\WithPagination;

class Userlist extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $operatorSignforAge;
    public $operatorSignForBalance;
    public $balance;
    public $age;
    public $filter;
    public $sortBy = "id";
    public $sortDirecttion = 'asc';
    
    public function delete($id){
        $delete = Userinfo::find($id)
                ->where('id',$id)
                ->delete();
        session()->flash('success');
    }
   
    public function mount(){
        $this->search = '';
        $this->operatorSignForBalance = '';
        $this->operatorSignforAge = '';
        $this->balance = '';
        $this->age = '';
    }

    public function render()
    {   
        $operator = ['<','>','>=','<='];

        $data = Userinfo::when($this->search != '', function ($q){
                    $q->where('name','like' ,'%'.$this->search.'%')
                        ->orWhere('email', 'like', '%' .$this->search.'%');
                        })
                        ->when($this->balance != '', function ($q){
                            $q->where('account_balance', $this->operatorSignForBalance, $this->balance);
                        })
                        ->when($this->age != '', function ($q){
                            $q->where('age', $this->operatorSignforAge, $this->age);
                        })
                        ->orderBy($this->sortBy, $this->sortDirecttion)
                        ->paginate(5);

            return view('livewire.userlist',[
                'data' => $data , 'operator' => $operator
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortDirecttion == 'asc') 
        {
            $this->sortDirecttion = 'desc';
        } else {
            $this->sortDirecttion = 'asc';
        }

        return $this->sortBy = $field;
    }


}
