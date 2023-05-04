<h1 align="center">
  ProjectWise
</h1>
<br/>
<h4 align="center">ProjectWise is a project Management App using laravel</h4>
<br/>
<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#screenshot">Screenshot</a> •
  <a href="#credits">Credits</a> •
  <a href="#related">Related</a> •
  <a href="#license">License</a>
</p>

## Key Features

* Authentication.
* Authorization (rbac)
* Create Project
* Assign Project
* Create Task
* Assign Task
* Task Comment
* Dashboard

## How To Use

To clone and run this application, you'll need [Docker](https://docker.com) installed on your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/krahman80/project-management-app.git

# Go into the repository
$ cd project-management-app

# Run docker compose
$ docker compose up -d

# Get into docker console
$ docker exec -it app bash

# Install your laravel package
$ composer install

# Configure your .env file

# Migrate database
$ php artisan migrate

# Seed database
$ php artisan db:seed

# Open your browser and open this url http://localhost:8020

```

## Screenshot


## Credits

This software uses the following open source packages:

- [Laravel](http://laravel.com/)

## License

MIT

---

> GitHub [@Krahman80](https://github.com/krahman80) &nbsp;&middot;&nbsp;
