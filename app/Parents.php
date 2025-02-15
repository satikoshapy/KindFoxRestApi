<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'firstname', 'lastname', 'login', 'password', 'daycare_id', 'phone', 'avatar'      
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}