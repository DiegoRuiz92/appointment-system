<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravel\Jetstream\Role as JetstreamRole;
use Laravel\Jetstream\Rules\Role as RulesRole;
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
        $role1 = Role::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'asesor']);

        $permission = Permission::create(['name' => 'home'])->syncRoles([$role1,$role2]);
        
        $permission = Permission::create(['name' => 'offices.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'offices.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'offices.update'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'offices.destroy'])->syncRoles([$role1]);
        
        $permission = Permission::create(['name' => 'workstations.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workstations.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workstations.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workstations.destroy'])->syncRoles([$role1]);
        
        $permission = Permission::create(['name' => 'workshops.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workshops.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workshops.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'workshops.destroy'])->syncRoles([$role1]);
    }
}
