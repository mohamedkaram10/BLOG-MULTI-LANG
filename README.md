<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Blog System

 Blog System for managing Posts.

## Requirements

* Laravel v10.x
* PHP v8.1

## Installation

1. Clone the repository:
   ```shell
   git clone git@github.com:mohamedkaram10/BLOG-MULTI-LANG.git
   ```

2. Navigate to the project directory:
   ```shell
   cd restaurant-app
   ```

3. Install dependencies using Composer:
   ```shell
   composer install
   ```

4. Create a `.env` file by copying `.env.example`:
   ```shell
   cp .env.example .env
   ```

5. Generate a new Laravel application key:
   ```shell
   php artisan key:generate
   ```

6. Create a fresh database and update the DB name in `.env` file

7. Migrate the DB and seed the data
   ```shell
   php artisan migrate:fresh --seed
   ```

8. Start the Laravel development server:
   ```shell
   php artisan serve
   ```
