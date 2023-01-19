<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Empresas;

class EmpresasIndex extends Component

{
    use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch(){
        $this->resetPage();
    }

    public $search;

    public function render()
    {
        $empreas = Empresas::where('nombre', 'LIKE', '%' . $this->search . '%')->orWhere('empresa', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.empresas-index', compact('empresas'));
    }
}
