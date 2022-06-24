<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Method Insert
        DB::table('users')->insert([
            'fullname' => 'Jeremias Springfield',
            'email'    => 'jeremias@mail.com',
            'phone'    => 3504412234,
            'birthday' => '1968-08-05',
            'gender'   => 'Male',
            'address'  => 'Av Siempre Viva',
            'role'     => 'Admin',
            'password' => Hash::make('admin')
        ]);
        // Method ORM
        $user = new User;
        $user->fullname = 'Homero Simpson';
        $user->email    = 'homero@mail.com';
        $user->phone    = 3154426358;
        $user->birthday = '190-05-15';
        $user->gender   = 'Male';
        $user->address  = 'Av Siempre Viva';
        $user->password = bcrypt('customer');
        $user->save();
    }
}
