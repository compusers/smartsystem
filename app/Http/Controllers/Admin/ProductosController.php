<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Http\Requests\StoreProductosRequest;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return view('admin.productos.index', compact('productos'));
    }

    public function create()
    {
        $moneda = [
            'MXN' => 'Pesos',
            'USD' => 'Dolares',
        ];
        return view('admin.productos.create', compact('moneda'));
    }

    public function store(StoreProductosRequest $request)
    {
        $productos = Productos::create($request->all());
        return redirect()->route('admin.productos.index');    
    }

    public function show($producto)
    {
        return view('admin.productos.show', compact('producto'));
    }

    public function edit(Productos $producto)
    {
        $moneda = [
            'MXN' => 'Pesos',
            'USD' => 'Dolares',
        ];
        return view('admin.productos.edit', compact('producto', 'moneda'));
    }

    public function update(Request $request, Productos $producto)
    {
        $producto->update($request->all());
        return redirect()->route('admin.productos.index', $producto)->with('destroy', 'Producto Actulizado Corractamente');
    }

    public function destroy(Request $request, Productos $producto)
    {
        $producto->destroy($producto->id);
        return redirect()->route('admin.productos.index', $producto)->with('destroy', 'Producto Eliminado Corractamente');
    }
}
