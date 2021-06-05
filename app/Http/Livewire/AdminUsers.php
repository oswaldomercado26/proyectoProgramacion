<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    protected $paginationTheme ='bootstrap';
    use WithPagination;
    public $search;
    public function render()
    {
        $users= User::where('name','LIKE', '%'. $this->search.'%')
        ->orwhere('email','LIKE', '%'. $this->search.'%')
        ->paginate(12);
        return view('livewire.admin-users',compact('users'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
