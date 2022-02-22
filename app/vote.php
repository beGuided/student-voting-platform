<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    protected $fillable = ['candidate_id', 'user_id'];


    public function candidate()
    {
        return $this->belongsTo(candidate::class);
    }


    public function user()
    {
        return $this->belongsTo(user::class); 
    } 
 
}
