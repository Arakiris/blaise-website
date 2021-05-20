<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
}
