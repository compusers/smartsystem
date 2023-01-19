<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Clientes;

class ClientesIndex extends Component

{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }

    public $search;

    public function render()
    {
        $clientes = Clientes::where('nombre', 'LIKE', '%' . $this->search . '%')->orWhere('telefono', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.clientes-index', compact('clientes'));
    }
}
