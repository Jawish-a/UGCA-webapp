<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // storeable data fields
    protected $fillable = ['body', 'user_id', 'group_id'];

    // relationships
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function group()
    {
        $this->belongsTo('App\Group');
    }
}
