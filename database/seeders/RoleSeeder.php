<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
        $role2 = Role::create(['name' => 'Operador']);

        Permission::create(['name' => 'categories.index'])->assignRole($role1);
        Permission::create(['name' => 'categories.create'])->assignRole($role1);
        Permission::create(['name' => 'categories.edit'])->assignRole($role1);
        Permission::create(['name' => 'categories.destroy'])->assignRole($role1);

        Permission::create(['name' => 'pagos.index'])->assignRole($role1);
        Permission::create(['name' => 'pagos.create'])->assignRole($role1);
        Permission::create(['name' => 'pagos.edit'])->assignRole($role1);
        Permission::create(['name' => 'pagos.destroy'])->assignRole($role1);

        Permission::create(['name' => 'tiquetes.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'tiquetes.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'tiquetes.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'tiquetes.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'usuarios.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name' => 'provider.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'provider.destroy'])->syncRoles([$role1,$role2]);
    }
}
