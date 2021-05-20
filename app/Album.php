<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * Get the songs for the album.
     */
    public function songs()
    {
        return $this->hasMany('App\Song');
    }
}
