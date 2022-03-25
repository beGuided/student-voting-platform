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
        };

        $user= new User([                                    
         'name' => 'john Doe',
        'email' =>'EDU123456@fcetmail.com',
        'role' =>'user',
        'mat_number'=> 'EDU123456',
        'password' => Hash::make('EDU123456')     
                     ]);  $user->save() ;

        

    }
}
