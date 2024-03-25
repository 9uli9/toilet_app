<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = new Role();
        $role_admin->name = "admin";
        $role_admin->description = "An Administrator User";
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = "user";
        $role_user->description = "An Ordinary User";
        $role_user->save();
        



        }
}
