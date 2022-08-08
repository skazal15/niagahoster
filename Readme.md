# NiagaHoster Frontend

# Requirements
NiagaHoster Frontend  is built using laravel FrameWork version 9.23.0, Bootstrap 4.5.0, and Font-Awesome 4.7.0

## Installation
To get the project up and running, and view components in the browser, complete the following steps:

Clone this repo: git clone git@github.com:skazal15/niagahoster.git (SSH) or git clone https://github.com/skazal15/niagahoster.git (HTTPS)
Install Web Server(Apache WebServer or XAMP or NGINX)
[optional] if not using new version XAMPP,Install PHP version 8.x.x

## Start the development environment
Development
When developing components, you may want assets automatically compiled and the browser to refresh automatically. To do this, run the following task:

create DB table

    php artisan migrate 
 
populate DB table

    php artisan db:seed

start the project

    php artisan serve

## Repo structure
Sometimes it’s helpful to know what all these different files are for…
=
- `app/Http/Controllers` - Contains all the project controllers
- `app/Models` - Contains all the project Model
- `app/View/Components` - Contains all the Blade Component for Project
- `database/migrations` - Contains the Database table configuration
- `database/seeders` - Contains the data
- `public/` - Contains Index and Assets file 
- `public/Assets` - Contains css,fonts,and images files
- `resources/views` - Contains view file and blade component file
- `routes/web.php` - Contains the url path config