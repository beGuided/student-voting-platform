<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;


class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index')->with('categories', category::all());
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
      
        category::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'category created successfully.');

        return redirect(route('categories.index'));   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Category $category)
    {
        return view('categories.create')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {

        //alternative way
    //    $category-> $request->name;  
    //    $category->save();

       $category-> update([
        'name' => $request->name
    ]);
  

       session()->flash('success', 'Category updated successfully');

       return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       if($category->candidates->count() > 0){

        session()->flash('error', 'You need to delete all candidate associated with this category ');
        return redirect(route('categories.index'));

       }
       else{
        $category->delete();

        session()->flash('success', 'Category deleted successfully.');
        return redirect(route('categories.index'));
       }
    }


    

}
