<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'comment', 'post_id', 'parent_id', 'daycare_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}