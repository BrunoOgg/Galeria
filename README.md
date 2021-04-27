<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Galeria de fotos de esculturas usando Laravel e Vue

### Install

1. Open your terminal.

2. Clone this repo:

        git clone https://github.com/herusdianto/laravel-vue-crud.git
    
3. Once finished, change directory to laravel-vue-crud:

        cd laravel-vue-crud
    
4. Install all laravel dependencies:

        composer install

5. Copy .env file:

        cp .env.example .env

6. Modify `DB_*` value in `.env` with your database config.

7. Generate application key:

        php artisan key:generate

8. Run migration table:

        php artisan migrate

9. Create a symbolic link:

        php artisan storage:link

10. Serve the app:

        php artisan serve

11. Open `http://localhost:8000/` in your web browser.
