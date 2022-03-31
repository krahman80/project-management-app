<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    
    protected $dates = ['deadline'];

    protected $fillable = ['name', 'deadline', 'status'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
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

    public function getFlagAttribute() {
        $now = Carbon::now();

        if ($now->lessThan($this->created_at)){
            return "not started"; }
        else if ($this->deadline->lessThan($now)) {
            return "overdue";
        } else {
            return "started";
        }
    }

    public function getFlagClassAttribute() {
        $now = Carbon::now();

        if ($now->lessThan($this->created_at)){
            return "bg-info";
        }
        else if ($this->deadline->lessThan($now)){
            return "bg-danger text-white";
        } else {
            return "bg-warning";
        }

    }
}
