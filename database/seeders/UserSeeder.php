<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get admin and user roles
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        // Generate unique email addresses
        $adminEmail = "admin@example.com";
        $userEmail = "user@example.com";

        // Check if these emails already exist, modify them 
        $adminEmail = User::where('email', $adminEmail)->exists() ? "admin1@example.com" : $adminEmail;
        $userEmail = User::where('email', $userEmail)->exists() ? "user1@example.com" : $userEmail;

        // Create admin user
        $admin = new User;
        $admin->name = "Julia Szew";
        $admin->email = $adminEmail;
        $admin->password = bcrypt("secret123"); // Hash the password
        $admin->save();
        $admin->roles()->attach($role_admin);

        // Create regular user
        $user = new User;
        $user->name = "Mo Che";
        $user->email = $userEmail;
        $user->password = bcrypt("secret123"); // Hash the password
        $user->save();
        $user->roles()->attach($role_user);
    }
}
