<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model
{
    public function task() {
        return $this->belongsTo('App\task');
    }
}
