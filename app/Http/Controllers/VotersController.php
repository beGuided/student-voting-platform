<?php

namespace App\Http\Controllers;

use App\voter;
use Illuminate\Http\Request;
use App\Http\Requests\voters\CreateVotersRequest;
use App\Http\Requests\Voters\UpdateVotersRequest;
use App\candidate;
use App\vote;
use App\user;
use App\category;
use App\Http\Requests\Candidate\CreateCandidateRequest;

class VotersController extends Controller
{
    
    // public function __construct()
    // {
    //  $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
    // }

     
    public function index()
    {
        
        return view('voters.index')
        ->with('users', user::all())
        ->with('candidates', candidate::all())
        ->with('categories', category::all())
        ->with('votes', vote::all());
        
    }

    
    public function create()
    {
         return view('voters.create');
    }

    
    public function store(CreateVotersRequest $request)
    {
         //dd($request->all());
        
        //create the Voters
        voter::create([
            'voter_name'=>$request->voter_name,
            'level'=>$request->level,
            'gender'=>$request->gender,
             'password' =>$request->password,
             'vote_status'=>$request->vote_status,
             'vote_id'=> 0
            
            
        ]);

       // flash message
        session()->flash('success', 'Voters created successfuly');
        
        //redirect user
        return redirect(route('voters.index'));

    }

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit (Voter $voter)
    {
        return view('voters.create')->with('voter', $voter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVotersRequest $request, Voter $voter)
    {
        $data = $request->only(['voters_name', 'level','gender','vote_status','password']);
       
       
        //update attribute
        $voter->update($data);
    
        session()->flash('success', 'Voters updated successfuly');
      
        return redirect(route('voters.index'));
    }


   
    public function destroy(Voter $voter)
    {
        $voter->delete();
        

        session()->flash('success', 'Voters trashed successfuly');
        
        return redirect(route('voters.index'));

       

    }

    //display a list of all trashed post
    // public function trashed()
    // {
    //     $trashed = Voters::withTrashed()->get();

    //     return view('Voters.index')->with('Voterss', $trashed);
    // }

}
