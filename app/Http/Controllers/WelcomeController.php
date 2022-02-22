<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\candidate;



class WelcomeController extends Controller
{
 
    public function index(){

        return view('welcome');   
    
    }

}