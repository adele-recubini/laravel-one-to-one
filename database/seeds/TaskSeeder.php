<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Task;
use App\TaskDetail;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i =0; $i <6; $i++){


      $task = new Task();
      $task->title = $faker ->title();
      $task->save();


      $taskDetail = new TaskDetail();
      $taskDetail->dettagli = $faker ->text();

      $task->detail()->save($taskDetail);


    }
 }
}
