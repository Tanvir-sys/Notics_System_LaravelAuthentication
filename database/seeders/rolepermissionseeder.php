<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class rolepermissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create role
        $roleSupperAdmin=Role::create(['name'=>'SuperAdmin']);

        //create permission
        $permissions=[

            'SupperAdminDashboard.view',

        ];

        for($i=0; $i< count($permissions);$i++)
        {
            $permission= Permission::create(['name'=> $permissions[$i]]);
            $roleSupperAdmin->givePermissionTo($permission);

        }


    }
}
