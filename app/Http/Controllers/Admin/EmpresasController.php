<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Http\Requests\StoreEmpresasRequest;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresas = Empresas::all();
        return view('admin.empresas.index', compact('empresas'));
    }

    public function create()
    {
        $estado = [
            'Aguascalientes' => 'Aguascalientes',
            'Baja California' => 'Baja California',
            'Baja California Sur' => 'Baja California Sur',
            'Campeche' => 'Campeche',
            'Chiapas' => 'Chiapas',
            'Chihuahua' => 'Chihuahua',
            'Ciudad de México' => 'Ciudad de México',
            'Coahuila' => 'Coahuila',
            'Colima' => 'Colima',
            'Durango' => 'Durango',
            'Leon' => 'Leon',
            'Guerrero' => 'Guerrero',
            'Hidalgo' => 'Hidalgo',
            'Jalisco' => 'Jalisco',
            'México' => 'México',
            'Michoacán' => 'Michoacán',
            'Morelos' => 'Morelos',
            'Nayarit' => 'Nayarit',
            'Nuevo León' => 'Nuevo León',
            'Oaxaca' => 'Oaxaca',
            'Puebla' => 'Puebla',
            'Querétaro' => 'Querétaro',
            'Quintana Roo' => 'Quintana Roo',
            'San Luis Potosí' => 'San Luis Potosí',
            'Sinaloa' => 'Sinaloa',
            'Sonora' => 'Sonora',
            'Tabasco' => 'Tabasco',
            'Tamaulipas' => 'Tamaulipas',
            'Tlaxcala' => 'Tlaxcala',
            'Veracruz' => 'Veracruz',
            'Yucatán' => 'Yucatán',
            'Zacatecas' => 'Zacatecas',

        ];
        $municipio = [
            'Aguascalientes' => 'Aguascalientes',
            'Mexicali' => 'Mexicali',
            'La Paz' => 'La Paz',
            'San Francisco de Campeche' => 'San Francisco de Campeche',
            'Tuxtla Gutiérrez' => 'Tuxtla Gutiérrez',
            'Chihuahua' => 'Chihuahua',
            'Ciudad de México' => 'Ciudad de México',
            'Saltillo' => '	Saltillo',
            'Colima' => 'Colima',
            'Victoria de Durango' => 'Victoria de Durango',
            'Guanajuato' => 'Guanajuato',
            'Chilpancingo de los Bravo' => 'Chilpancingo de los Bravo',
            'Pachuca de Soto' => 'Pachuca de Soto',
            'Guadalajara' => 'Guadalajara',
            'Toluca de Lerdo' => 'Toluca de Lerdo',
            'Morelia' => 'Morelia',
            'Cuernavaca' => 'Cuernavaca',
            'Tepic' => 'Tepic',
            'Monterrey' => 'Monterrey',
            'Oaxaca de Juárez' => 'Oaxaca de Juárez',
            'Puebla de Zaragoza' => 'Puebla de Zaragoza',
            'Santiago de Querétaro' => 'Santiago de Querétaro',
            'Chetumal' => 'Chetumal',
            'San Luis Potosí' => 'San Luis Potosí',
            'Culiacán Rosales' => 'Culiacán Rosales',
            'Hermosillo' => 'Hermosillo',
            'Villahermosa' => 'Villahermosa',
            'Ciudad Victoria' => 'Ciudad Victoria',
            'Tlaxcala de Xicohténcatl' => 'Tlaxcala de Xicohténcatl',
            'Xalapa-Enríquez' => 'Xalapa-Enríquez',
            'Mérida' => 'Mérida',
            'Zacatecas' => 'Zacatecas',

        ];
        return view('admin.empresas.create', compact('estado', 'municipio'));
    }

    public function store(StoreEmpresasRequest $request)
    {
        $empresa = Empresas::create($request->all());
        return redirect()->route('admin.empresas.index');
    }

    public function show(Empresas $empresa)
    {
        return view('admin.empresas.show', compact('empresa'));
    }

    public function edit(Empresas $empresa)
    {        $estado = [
        'Aguascalientes' => 'Aguascalientes',
        'Baja California' => 'Baja California',
        'Baja California Sur' => 'Baja California Sur',
        'Campeche' => 'Campeche',
        'Chiapas' => 'Chiapas',
        'Chihuahua' => 'Chihuahua',
        'Ciudad de México' => 'Ciudad de México',
        'Coahuila' => 'Coahuila',
        'Colima' => 'Colima',
        'Durango' => 'Durango',
        'Leon' => 'Leon',
        'Guerrero' => 'Guerrero',
        'Hidalgo' => 'Hidalgo',
        'Jalisco' => 'Jalisco',
        'México' => 'México',
        'Michoacán' => 'Michoacán',
        'Morelos' => 'Morelos',
        'Nayarit' => 'Nayarit',
        'Nuevo León' => 'Nuevo León',
        'Oaxaca' => 'Oaxaca',
        'Puebla' => 'Puebla',
        'Querétaro' => 'Querétaro',
        'Quintana Roo' => 'Quintana Roo',
        'San Luis Potosí' => 'San Luis Potosí',
        'Sinaloa' => 'Sinaloa',
        'Sonora' => 'Sonora',
        'Tabasco' => 'Tabasco',
        'Tamaulipas' => 'Tamaulipas',
        'Tlaxcala' => 'Tlaxcala',
        'Veracruz' => 'Veracruz',
        'Yucatán' => 'Yucatán',
        'Zacatecas' => 'Zacatecas',

    ];
    $municipio = [
        'Aguascalientes' => 'Aguascalientes',
        'Mexicali' => 'Mexicali',
        'La Paz' => 'La Paz',
        'San Francisco de Campeche' => 'San Francisco de Campeche',
        'Tuxtla Gutiérrez' => 'Tuxtla Gutiérrez',
        'Chihuahua' => 'Chihuahua',
        'Ciudad de México' => 'Ciudad de México',
        'Saltillo' => '	Saltillo',
        'Colima' => 'Colima',
        'Victoria de Durango' => 'Victoria de Durango',
        'Guanajuato' => 'Guanajuato',
        'Chilpancingo de los Bravo' => 'Chilpancingo de los Bravo',
        'Pachuca de Soto' => 'Pachuca de Soto',
        'Guadalajara' => 'Guadalajara',
        'Toluca de Lerdo' => 'Toluca de Lerdo',
        'Morelia' => 'Morelia',
        'Cuernavaca' => 'Cuernavaca',
        'Tepic' => 'Tepic',
        'Monterrey' => 'Monterrey',
        'Oaxaca de Juárez' => 'Oaxaca de Juárez',
        'Puebla de Zaragoza' => 'Puebla de Zaragoza',
        'Santiago de Querétaro' => 'Santiago de Querétaro',
        'Chetumal' => 'Chetumal',
        'San Luis Potosí' => 'San Luis Potosí',
        'Culiacán Rosales' => 'Culiacán Rosales',
        'Hermosillo' => 'Hermosillo',
        'Villahermosa' => 'Villahermosa',
        'Ciudad Victoria' => 'Ciudad Victoria',
        'Tlaxcala de Xicohténcatl' => 'Tlaxcala de Xicohténcatl',
        'Xalapa-Enríquez' => 'Xalapa-Enríquez',
        'Mérida' => 'Mérida',
        'Zacatecas' => 'Zacatecas',

    ];
        return view('admin.empresas.edit', compact('empresa', 'estado', 'municipio'));
    }

    public function update(Request $request, Empresas $empresa)
    {
        $empresa->update($request->all());
        return redirect()->route('admin.empresas.index', $empresa)->with('destroy', 'Empresa Actulizada Corractamente');
    }

    public function destroy(Empresas $empresa)
    {
        $empresa->destroy($empresa->id);
        return redirect()->route('admin.empresas.index', $empresa)->with('destroy', 'Empresa Eliminada Corractamente');
    }
}
