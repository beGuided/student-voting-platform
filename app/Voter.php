<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class voter extends Authenticatable
{
    use Notifiable;
  
    protected $guard = 'voter';

    protected $fillable = [
        'voter_name', 'vote_id', 'gender','level', 'password', 'vote_status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



// public function category(){

//     return $this->belongsTo(category::class);

// }




}


