<?php
use Illuminate\Foundation\Auth\User;

class UserTableSeeder extends \Illuminate\Database\Seeder{


    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Chris Sevilleja',
            'username' => 'sevilayha',
            'email'    => 'chris@scotch.io',
            'password' => Hash::make('awesome'),
        ));
        User::create(array(
            'name'     => 'Mwalima Peltenburg',
            'username' => 'peltenburg',
            'email'    => 'm.peltenburg@hotmail.com',
            'password' => Hash::make('1234567'),
        ));
    }

}