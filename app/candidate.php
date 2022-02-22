<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Auth;

class candidate extends Model
{
    //use SoftDeletes;

    protected $fillable = [
        'candidate_name', 'category_id', 'gender','candidate_level', 'image', 'vote_count'
    ];

    //delete candidate image
public function deleteImage(){

    Storage::delete($this->image);

}

public function category(){

    return $this->belongsTo(category::class);

}

public function votes(){

    return $this->hasMany(vote::class);

}

public function is_voted_by_auth_user()
{
    $id = Auth::id();
    $voters = array();

    foreach($this->votes as $vote):
    array_push($voters, $vote->user_id);

    endforeach;

    if(in_array($id, $voters))
    {
        return true;
    }
    else{
        return false;
    }

}

public function votedBy(User $user)
{
    return $this->votes->contains('user_id', $user->id);
}



}


