## Completed To Do

### Installed library
* composer require laravel/ui
* composer require spatie/laravel-permission
* composer require livewire/livewire
* composer require cviebrock/eloquent-sluggable
* composer require bastinald/laravel-livewire-modals
* create basic project design
  1. create project list page
  2. create layouts (app.blade.php)
  3. create project detail page
* create login, register template
* create migration models for this tables
  1. projects
  2. tasks
* create users, projects, tasks factory
* create users, projects, tasks seeder
* create dashboard component
* create projectTask component
* slug field on project
* split Project task into smaller component
* Add new Task
* validate new Task

## Outstanding To Do
* add datepicker to new task
* add authorization to new task
* projectTask component
  * project owner
    1. link edit project to edit project page
    3. show edit task for project owner only
    6. add user to project 
  * all member
    1. show task owner
    2. show project member
  * task owner
    4. show task update status for task owner only

* TaskComment component
  * create migration models for this tables
    1. comment_task
  * task owner
    1. add new comments
    2. only project member and project owner can comments

* Add soft deletes
* Create list-project component
* create relations for each tables
* install :
  1. npm install pickaday/pickadate --save-dev
  2. npm install chartjs --save-dev
  3. composer require "spatie/laravel-medialibrary:^10.0.0"

