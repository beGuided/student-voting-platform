<?php

namespace App\Http\Controllers\Vote;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\candidate;
use App\category;
use App\vote;

use Auth;

class CastVoteController extends Controller

{


    public function index()
    {
       
            $search = Auth::id();
            $user_exist =  vote::where('user_id', $search)->first();

          
           if($user_exist)
           {
            return redirect(route('finishVote.index'));
           }else{
                     
            return view('vote.CastVote')
            ->with('candidates', candidate::all())
            ->with('category', category::all());
           }
      
    
    
    }

    
    
    public function store(Request $request)
    {
     
       
        $this->validate($request, [
            'candidate_id' => 'required'
        ]);
      
        //dd(request()->all());

      
    

            $candidate_id = request()->candidate_id;
            for($i=0; $i<count($candidate_id); $i++  )
            {

                $votesave = [
                    'candidate_id' =>$candidate_id[$i],
                    'user_id'      =>Auth::id()
                ];

                if($candidate_id[$i]== null){
                    Session()->flash('error', 'you failed to vote all the specified office');
                }else{
                    vote::insert($votesave);  
        
                    Session()->flash('success', 'your vote is successful');
           
                }
                
            }
            return redirect(route('finishVote.index'));
    }


//     public function unvote($id )

//     {
//         $vote= Vote::where('candidate_id', $id)->where('user_id', Auth::id())->first();

//         $vote->delete();

//         Session()->flash('error', 'your unvote a candidate');

//         return redirect()->back();
    
// }
    
}
