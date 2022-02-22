<?php

namespace App\Http\Controllers\Vote;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\candidate;


class PreviewController extends Controller
{
    
    public function preview(){

        return view('vote.preview')
        ->with('categories', category::all())
        ->with('candidates', candidate::all());
    }

    public function category(Category $category)
    {

        return view('vote.categories')
        ->with('category', $category)
        ->with('candidates', $category->candidates)
        // ->with('candidates', candidate::all())
        ->with('categories', category::all());
    }


}
