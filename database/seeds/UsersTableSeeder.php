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
        $user = User::where('email', 'admin@email.com')->first();
        if(!$user){
            user::create([
            'name'=> 'Admin',
            'email'=> 'admin@email.com',
            'role'=>'admin',
            'mat_number'=>'123456',
            'password' => Hash::make('123456')
            ]);
        }

        

    }
}
