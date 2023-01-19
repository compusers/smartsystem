<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Http\Requests\StoreClientesRequest;

class ClientesController extends Controller
{
    public function index()
    {
        return view('admin.clientes.index');
    }

    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(StoreClientesRequest $request)
    {
       $clientes = Clientes::create($request->all());
       return redirect()->route('admin.clientes.index');
    }

    public function show(Clientes $clientes)
    {
        return view('admin.clientes.show', compact('clientes'));
    }

    public function edit(Clientes $cliente)
    {
        return view('admin.clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('admin.clientes.index', $cliente)->with('destroy', 'Cliente Actulizado Corractamente');
    }

    public function destroy(Request $request, Clientes $cliente)
    {
        $cliente->destroy($cliente->id);
        return redirect()->route('admin.clientes.index', $cliente)->with('destroy', 'Cliente Eliminado Corractamente');
    }
}
