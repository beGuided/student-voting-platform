<?php

namespace App\Http\Controllers\Vote;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\candidate;
use App\vote;
use Auth;

class VotesController extends Controller
{
   
    
    public function __construct()
    {
     $this->middleware('verifyCategoriesCount');
    }
    
    public function index()
    {
        $search = request()->query('search');

        if($search){
        $votes = Vote::where('candidate_id', 'LIKE', "%{$search}%")->get();
       
        }else{

        $votes = vote::all();
         }
        return view('vote.index')
        ->with('votes', $votes);
    }


    
}
