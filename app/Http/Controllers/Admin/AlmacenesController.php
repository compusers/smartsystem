<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Almacen;
use App\Http\Requests\StoreAlmacenesRequest;

class AlmacenesController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();
        return view('admin.almacenes.index', compact('almacenes'));
    }

    public function create()
    {
        return view('admin.almacenes.create');
    }

    public function store(StoreAlmacenesRequest $request)
    {
        $almacen = Almacen::create($request->all());
        return redirect()->route('admin.almacenes.index');
    }

    public function show(Almacen $almacene)
    {
        return view('admin.almacenes.show', compact('almacene'));
    }

    public function edit(Almacen $almacene)
    {
        return view('admin.almacenes.edit', compact('almacene'));
    }

    public function update(Request $request, Almacen $almacene)
    {
        $almacene->update($request->all());
        return redirect()->route('admin.almacenes.index', $almacene)->with('destroy', 'Almacén Actulizado Corractamente');   
    }

    public function destroy(Almacen $almacene)
    {
        $almacene->destroy($almacene->id);
        return redirect()->route('admin.almacenes.index', $almacene)->with('destroy', 'Almacén Eliminado Corractamente');    
    }
}
