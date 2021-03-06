<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // $entry->user_error
    // Entry N -1 User
    //Eager loading
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
