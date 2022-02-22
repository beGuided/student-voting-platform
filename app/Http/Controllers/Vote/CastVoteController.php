<?php

namespace App\Http\Controllers\Vote;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\candidate;
use App\category;
use App\vote;
use Auth;

class CastVoteController extends Controller

{


    public function index(){

        // dd(Auth::id());

        return view('vote.CastVote')
        ->with('candidates', candidate::all())
        ->with('category', category::all()
    );

    }

    
    
    public function store(Request $request)
    {
     
       
        // $this->validate(request(), [
        //     'candidate_id' => 'required'
        // ]);
       // dd(request()->all());

/*******
 * 
        // $search = request()->query('candidate_id');

        // dd($search);
         //dd(request()->all());

        //   $candidate = candidate::find($id);

        /********** 
         * process all vote at once 
         * ****** *

        // $requests =request()->all();
        // foreach($request as $vote){
        //     vote::create([
        //             'candidate_id'=>request()->candidate_id,  
        //             'user_id'=> Auth::id()
        //         ]); 
        // }
*********/
        // $requests =request()->all();
        // $votes=[];
        // foreach($requests as $request){
        //     vote::create([
        //             'candidate_id'=>$request,  
        //             'user_id'=> Auth::id()
        //         ]); 
        // }
        // vote::create([
        //     'candidate_id'=>request()->candidate_id,  
        //     'user_id'=> Auth::id()
        // ]);  

         Session()->flash('success', 'your vote is successful');

         return redirect()->back();
    }


//     public function unvote($id )

//     {
//         $vote= Vote::where('candidate_id', $id)->where('user_id', Auth::id())->first();

//         $vote->delete();

//         Session()->flash('error', 'your unvote a candidate');

//         return redirect()->back();
    
// }
    
}
