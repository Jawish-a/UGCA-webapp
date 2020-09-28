<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // storeable data fields
    protected $fillable = ['name'];

    // relationships
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
