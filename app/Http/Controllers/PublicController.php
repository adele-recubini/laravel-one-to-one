<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class PublicController extends Controller
{
   public function index(){
       $tasks = Task::all();
       return view('tasks.public.index', compact('tasks'));
   }
}
