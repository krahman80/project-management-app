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

    public function getFlagAttribute() {
        $now = Carbon::now();
        $begin_date = Carbon::parse($this->start_date);
        $end_date = Carbon::parse($this->end_date);

        if ($now->lessThan($begin_date)){
            return "not started"; }
        else if ($end_date->lessThan($now)) {
            return "overdue";
        } else {
            return "started";
        }
    }

    public function getFlagClassAttribute() {
        $now = Carbon::now();
        $begin_date = Carbon::parse($this->start_date);
        $end_date = Carbon::parse($this->end_date);

        if ($now->lessThan($begin_date)){
            return "bg-info";
        }
        else if ($end_date->lessThan($now)){
            return "bg-danger text-white";
        } else {
            return "bg-warning";
        }

    }

    public function getStatusStringAttribute() {
        if($this->status == 0) {
            return "In Progress";
        } else if ($this->status == 1) {
            return "Pending";
        } else {
            return "Completed";
        }
    }

    public function comments() {
        return $this->belongsToMany('App\Comment');
    }    
}
