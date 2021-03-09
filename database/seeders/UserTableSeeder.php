<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_editor = Role::where('name', 'editor')->first();
        $user = new User();
        $user->name = "Fran";
        $user->email = "fran@gmail.com";
        $user->password = Hash::make("fran");
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->name = "Pepe";
        $user->email = "pepe@gmail.com";
        $user->password = Hash::make("pepe");
        $user->save();
        $user->roles()->attach($role_editor);
        $user = new User();
        $user->name = "Paco";
        $user->email = "paco@gmail.com";
        $user->password = Hash::make("paco");
        $user->save();
        $user->roles()->attach($role_user);
    }
}
