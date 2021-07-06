<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function detail(){
        return $this ->hasOne('App\TaskDetail');
    }
}
