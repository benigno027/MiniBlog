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
        $users = [
            ["name" => "webmaster", "email" => "webmaster@miniblog.com", "password" => "miniblog"],
            ["name" => "admin.api", "email" => "admin.api@miniblog.com", "password" => "miniblog"],
        ];

        foreach ($users as $user) {
            $User = new User();
            $User->name = $user["name"];
            $User->email = $user["email"];
            $User->password = Hash::make(  $user["password"] );
            $User->rol = 'admin';
            $User->save();    
        }
        
    }
}
