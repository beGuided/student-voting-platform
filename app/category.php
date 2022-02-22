<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name'];


    public function candidates(){

        return $this->hasMany(candidate::class);
    
    }




}
