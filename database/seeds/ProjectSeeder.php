<?php

use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Project', 2)->create()->each(
            function($project) {
                $task = factory('App\Task', 3)->make([
                    'project_id' => $project->id,
                ]);
                $project->task()->saveMany($task);
            }
        );
    }
}
