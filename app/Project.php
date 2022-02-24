<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function Task()
    {
        return $this->hasMany('App\Task');
    }
}
