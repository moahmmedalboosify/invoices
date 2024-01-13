<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $user = User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.ly',
        //     'password' => bcrypt('123456'),
        //     // 'roles_name' =>   ["owner"],
        //     'Status' => 'مفعل',
        // ]);

        $role = Role::find('2');

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        // $user->assignRole([$role->id]);
    }
}
