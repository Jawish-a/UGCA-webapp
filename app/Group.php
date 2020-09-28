<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // storeable data fields
    protected $fillable = ['title', 'description'];

    // relationships
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }

}
