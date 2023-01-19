<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Http\Requests\StoreInventarioRequest;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::all();
        return view('admin.inventarios.index', compact('inventarios'));
    }

    public function create()
    {
        $movimiento = [
            'Entrada' => 'Entrada',
            'Salida' => 'Salida',
        ];
        $concepto = [
            'Remisión' => 'Remisión',
            'Factura' => 'Factura',
            'Garantía' => 'Garantía',
            'Ajuste' => 'Ajuste',
        ];
        return view('admin.inventarios.create', compact('movimiento', 'concepto'));
    }

    public function store(StoreInventarioRequest $request)
    {
        $invenario = Inventario::create($request->all());
        return redirect()->route('admin.inventarios.index');
    }

    public function show(Inventario $invetario)
    {
        return view('admin.inventarios.show', compact('invetario'));
    }

    public function edit(Inventario $invetario)
    {
        $movimiento = [
            'Entrada' => 'Entrada',
            'Salida' => 'Salida',
        ];
        $concepto = [
            'Remisión' => 'Remisión',
            'Factura' => 'Factura',
            'Garantía' => 'Garantía',
            'Ajuste' => 'Ajuste',
        ];
        return view('admin.inventarios.edit', compact('invetario', 'movimiento', 'concepto'));
    }

    public function update(Request $request, Inventario $invetario)
    {
        $invetario->update($request->all());
        return redirect()->route('admin.inventarios.index', $invetario)->with('destroy', 'inventario Actulizado Corractamente');
    }

    public function destroy(Inventario $invetario)
    {
        $invetario->destroy($invetario->id);
        return redirect()->route('admin.inventarios.index', $invetario)->with('destroy', 'inventario Eliminado Corractamente');   
    }
}
