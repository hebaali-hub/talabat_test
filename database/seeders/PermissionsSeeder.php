<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);


        $role2 = Role::create(['name' => 'vendor']);


        $role3 = Role::create(['name' => 'user']);

        // create demo users
        // $user = \App\Models\User::factory()->create([
        //     'name_en' => 'mona',
        //     'name_ar' =>'منى',
        //     'password' => '123',
        //     'email' => 'mona@gmail.com',
        // ]);
        // $user->assignRole($role1);
        // $user = \App\Models\User::factory()->create([
        //     'name_en' => 'kfc',
        //     'name_ar' => 'كنتاكى',
        //     'password' => '123',
        //     'email' => 'kfc@gmail.com',
        // ]);
        // $user->assignRole($role2);
        // $user = \App\Models\User::factory()->create([
        //     'name_en' => 'heba',
        //     'name_ar' => 'هبه',
        //     'password' => '123',
        //     'email' => 'heba@gmail.com',
        // ]);
        // $user->assignRole($role3);
    }
}
