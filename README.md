<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Galeria de fotos de esculturas usando Laravel e Vue

#Install
Open your terminal.

Clone this repo:

 git clone https://github.com/herusdianto/laravel-vue-crud.git
Once finished, change directory to laravel-vue-crud:

 cd laravel-vue-crud
Install all laravel dependencies:

 composer install
Copy .env file:

 cp .env.example .env
Modify DB_* value in .env with your database config.

Generate application key:

 php artisan key:generate
Run migration table:

 php artisan migrate
Create a symbolic link:

 php artisan storage:link
Serve the app:

php artisan serve
Open http://localhost:8000/ in your web browser.
