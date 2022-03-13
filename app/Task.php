<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    public function Project() {
        return $this->belongsTo('App\Project');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }

    public function getDueDateAttribute() {
        $due_date = Carbon::parse($this->end_date);
        return $due_date->format('M d Y');
    }

    public function getBeginDateAttribute() {
        $begin_date = Carbon::parse($this->start_date);
        return $begin_date->format('M d Y');
    }

    public function getStringStatusAttribute() {
        $now = now();
        $begin_date = Carbon::parse($this->start_date);
        if ($now->lessThan($begin_date)){
            return "not started";
        }
        else {
            return "started";
        }
    }

    public function getStatusClassAttribute() {
        $now = now();
        $begin_date = Carbon::parse($this->start_date);
        if ($now->lessThan($begin_date)){
            return "bg-info";
        }
        else {
            return "bg-warning";
        }
    }
}
