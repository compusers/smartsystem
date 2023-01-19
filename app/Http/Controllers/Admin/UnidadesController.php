<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unidades;
use App\Http\Requests\StoreUnidadesRequest;

class UnidadesController extends Controller
{
    public function index()
    {
        $unidades = Unidades::all();
        return view('admin.unidades.index', compact('unidades'));
    }

    public function create()
    {
        return view('admin.unidades.create');
    }

    public function store(StoreUnidadesRequest $request)
    {
        $unidad = Unidades::create($request->all());
        return redirect()->route('admin.unidades.index');
    }

    public function show(Unidades $unidade)
    {
        return view('admin.unidades.show', compact('unidade'));
    }

    public function edit(Unidades $unidade)
    {
        return view('admin.unidades.edit', compact('unidade'));
    }

    public function update(Request $request, Unidades $unidade)
    {
        $unidade->update($request->all());
        return redirect()->route('admin.unidades.index', $unidade)->with('destroy', 'Unidad Actulizada Corractamente');
    }

    public function destroy(Unidades $unidade)
    {
        $unidade->destroy($unidade->id);
        return redirect()->route('admin.unidades.index', $unidade)->with('destroy', 'Unidad Eliminada Corractamente');
    }
}
