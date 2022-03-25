<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function tasks(){
        return $this->belongsToMany('App\Task');
    }
}
