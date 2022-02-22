<?php

namespace App\Http\Controllers\Vote;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class FinishVoteController extends Controller
{
    
    public function index(){

        return view('vote.finishVote');

    }
}
