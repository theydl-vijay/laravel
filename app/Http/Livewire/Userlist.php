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
    public $filter;
    public $filterbyage;

    public function delete($id){
        $delete = Userinfo::find($id)
                ->where('id',$id)
                ->delete();
        session()->flash('success');
    }

    public function mount(){
        $this->search = '';
        $this->filterbybalance = '';
        $this->filterbyage = '';
    }
    

    public function render()
    {
        $data = Userinfo::when($this->search != '', function ($q){
                    $q->where('name','like' ,'%'.$this->search.'%');
                })
                ->when($this->filter != '', function ($q){
                    $q->where('id', $this->filter);
                })
                 ->when($this->filter != '', function ($q){
                    $q->where('id', $this->filter);
                })
                ->paginate(2);   
        return view('livewire.userlist',[
            'data' => $data
        ]);
    }
}
