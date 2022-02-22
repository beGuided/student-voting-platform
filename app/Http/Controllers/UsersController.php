<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\voters\CreateUserRequest;
use App\Http\Requests\Voters\UpdateUserRequest;
use App\User;

class UsersController extends Controller
{

     
    public function index()
    {
        return view('user.index')->with('users', user::all());
    }

    
    // public function create()
    // {
    //      return view('user.create');
    // }

    
    // public function store(CreateUserRequest $request)
    // {
    //      //dd($request->all());
        
    //     //create the users
    //     user::create([
    //         'name'=>$request->user_name,
    //         'level'=>$request->level,
    //         'gender'=>$request->gender,
    //          'password' =>$request->password,
    //          'role'=>$request->vote_status,
    //         //  'vote_id'=> 0
            
            
    //     ]);

    //    // flash message
    //     session()->flash('success', 'users created successfuly');
        
    //     //redirect user
    //     return redirect(route('users.index'));

    // }

    
    // public function show($id)
    // {
    //     //
    // }

   
    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     $data = $request->only(['name', 'level','gender','role','password']);
       
       
    //     //update attribute
    //     $user->update($data);
    
    //     session()->flash('success', 'users updated successfuly');
      
    //     return redirect(route('users.index'));
    // }


   
    // public function destroy(user $user)
    // {
    //     $user->delete();
        

    //     session()->flash('success', 'users trashed successfuly');
        
    //     return redirect(route('users.index'));

       

    // }


}
