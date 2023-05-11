<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Create project']);
        Permission::create(['name' => 'Add member to project']);
        Permission::create(['name' => 'delete member to project']);
        Permission::create(['name' => 'Add task']);
        Permission::create(['name' => 'Delete task']);


        // Create Role
        $ProjectManager = Role::create(['name' => 'Project Manager']);
        $Developer = Role::create(['name' => 'Developer']);

        $ProjectManager->givePermissionTo(['Create project', 'Add member to project', 'delete member to project', 'Add task', 'Delete task']);

        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('Project Manager');
        });

        User::factory(15)->create()->each(function ($user) {
            $user->assignRole('Developer');
        });

        // Create Project 

        User::role('Project Manager')->get()->each(

            // create 3 project for each user

            function ($u) {
                Project::factory(3)->create(['owner_id' => $u->id])->each(
                    function ($p) {

                        //create 3 task with different owner id

                        Task::factory(1)->create([
                            'project_id' => $p->id,
                            'owner_id' => User::role('developer')->get()->random()->id
                        ]);

                        Task::factory(1)->create([
                            'project_id' => $p->id,
                            'owner_id' => User::role('developer')->get()->random()->id
                        ]);

                        Task::factory(1)->create([
                            'project_id' => $p->id,
                            'owner_id' => User::role('developer')->get()->random()->id
                        ]);
                    }
                );
            }
        );

        // User::role('Project Manager')->get()->each(
        //     function ($u) {
        //         Project::factory(3)->create(['owner_id' => $u->id]);
        //     }
        // );

        // $project = Project::all();
    }
}
