<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Childrens extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'child_firstname', 'child_lastname', 'age', 'childcode', 'parent_id', 'checked_in'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}