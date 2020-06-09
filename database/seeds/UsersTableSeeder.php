<?php

use App\User;
use Illuminate\Database\Seeder;
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
        $User = new User();
        
        $User->name = 'webmaster';
        $User->email = 'webmaster@miniblog.com';
        $User->password = Hash::make('miniblog');
        $User->rol = 'admin';
        $User->save();
        
    }
}
