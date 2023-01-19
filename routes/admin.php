<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ClientesController;
use App\Http\Controllers\Admin\EmpresasController;
use App\Http\Controllers\Admin\UnidadesController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\AlmacenesController;
use App\Http\Controllers\Admin\InventarioController;

Route::get('', [HomeController::class, 'index']);

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('clientes', ClientesController::class)->names('admin.clientes');

Route::resource('empresas', EmpresasController::class)->names('admin.empresas');

Route::resource('unidades', UnidadesController::class)->names('admin.unidades');

Route::resource('productos', ProductosController::class)->names('admin.productos');

Route::resource('almacenes', AlmacenesController::class)->names('admin.almacenes');

Route::resource('invetarios', InventarioController::class)->names('admin.inventarios');