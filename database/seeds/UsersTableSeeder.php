<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::truncate();
            DB::table('role_user')->truncate();


        $superadminRole = Role::where('urole','superadmin')->first();
            $adminRole  = Role::where('urole','admin')->first();
            $authorRole = Role::where('urole','author')->first();
            $userRole   = Role::where('urole','user')->first();

            $superadmin = User::create([
                'name'     => 'Shams',
                'reffer_code'     => 'fgyh546',
                'urole'    => 'superadmin',
                'email'    => 'superadmin@admin.com',
                'password' => Hash::make('superadmin@admin.com'),
            ]);


            $admin = User::create([
                'name'          => 'Khan',
                'reffer_code'          => '46545364163121',
                'urole'         => 'admin',
                'email'         => 'admin@admin.com',
                'password'      => Hash::make('admin@admin.com'),
            ]);

            $author = User::create([
                'name'     => 'Arabi',
                'reffer_code'     => '45456464564',
                'urole'    => 'author',
                'email'    => 'author@admin.com',
                'password' => Hash::make('author@admin.com'),
            ]);

            $user = User::create([
                'name'     => 'Mollah',
                'reffer_code' => '547545749',
                // 'urole'    => 'user',
                'email'    => 'user@admin.com',
                'password' => Hash::make('user@admin.com'),
            ]);

            $superadmin->roles()->attach($superadminRole);
            $admin     ->roles()->attach($adminRole);
            $author    ->roles()->attach($authorRole);
            $user      ->roles()->attach($userRole);

    }
} 
