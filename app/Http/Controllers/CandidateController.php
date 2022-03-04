<?php

namespace App\Http\Controllers;

use App\candidate;
use App\category;
use Illuminate\Http\Request;
use App\vote;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Candidate\CreateCandidateRequest;
use App\Http\Requests\Candidate\UpdateCandidateRequest;




class CandidateController extends Controller
{
    
    public function __construct()
    {
     $this->middleware('verifyCategoriesCount')->only(['create', 'store']);
   
    }

     
    public function index()
    {
        return view('candidates.index')
        ->with('candidates', candidate::all())
        ->with('vote', vote::all());
    }

    
    public function create()
    {
         return view('candidates.create')->with('categories', category::all());
    }

    
    public function store(CreateCandidateRequest $request)
    {
        // dd($request->all());

        // upload image to storage
        $image = $request->image->store('candidates');
    
        //create the candidate
        candidate::create([
            'candidate_name'=>$request->candidate_name,
            'candidate_level'=>$request->candidate_level,
            'gender'=>$request->gender,
            'category_id'=>$request->category_id,
            'image'=>$image,
            'published_at'=>$request->published_at
            
        ]);

        // flash message
        session()->flash('success', 'candidate created successfuly');
        
        //redirect user
        return redirect(route('candidates.index'));

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
    public function edit (Candidate $candidate)
    {
        return view('candidates.create')->with('candidate', $candidate)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $data = $request->only(['candidate_name', 'candidate_level','gender','category_id']);
       
        //check if image
        if($request->hasFile('image')){
            //upload it
            $image = $request->image->store('candidates');
            //delete former image
            Storage::delete($candidate->image);

            $data['image'] = $image;
        }
        

        //update attribute
        $candidate->update($data);
    
        session()->flash('success', 'candidate updated successfuly');
      
        return redirect(route('candidates.index'));
    }


   
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();
        
      $candidate->deleteImage();

        session()->flash('success', 'candidate trashed successfuly');
        
        return redirect(route('candidates.index'));

       

    }



    //display a list of all trashed post
    // public function trashed()
    // {
    //     $trashed = Candidate::withTrashed()->get();

    //     return view('candidate.index')->with('Candidates', $trashed);
    // }

}
