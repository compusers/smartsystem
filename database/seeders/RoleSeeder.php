<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Almacén']);
        $role3 = Role::create(['name' => 'Cobranza']);
        $role4 = Role::create(['name' => 'Garantías']);
        $role5 = Role::create(['name' => 'Soporte Técnico']);
        $role6 = Role::create(['name' => 'Técnico']);
        $role7 = Role::create(['name' => 'Monitoreo']);

        Permission::create(['name' => 'admin.home', 'description' => 'Dashboard'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6, $role7]);
        Permission::create(['name' => 'admin.qr', 'description' => 'QR'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'admin.usuario', 'description' => 'Usuarios'])->syncRoles([$role1,]);
        Permission::create(['name' => 'admin.cliente', 'description' => 'Clientes'])->syncRoles([$role1,]);
        Permission::create(['name' => 'admin.empresas', 'description' => 'Empresas'])->syncRoles([$role1,]);
        Permission::create(['name' => 'admin.unidad', 'description' => 'Unidades'])->syncRoles([$role1,]);
        Permission::create(['name' => 'admin.producto', 'description' => 'Productos'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'admin.almacen', 'description' => 'Almacen'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'admin.poliza', 'description' => 'Polizas'])->syncRoles([$role1,]);
        Permission::create(['name' => 'admin.garantia', 'description' => 'Garantias'])->syncRoles([$role1, $role4, $role5, $role6]);
        Permission::create(['name' => 'admin.remision', 'description' => 'Remisiones'])->syncRoles([$role1, $role5, $role6]);
        Permission::create(['name' => 'admin.ordenservicio', 'description' => 'Ordenes de Servicio'])->syncRoles([$role1, $role5, $role6]);
        Permission::create(['name' => 'admin.ordenventa', 'description' => 'Ordenes de Venta'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'admin.tecnico', 'description' => 'Técnicos'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'admin.cobranza', 'description' => 'Cobranza'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.monitoreo', 'description' => 'Monitoreo'])->syncRoles([$role1, $role3]);
    }
}
