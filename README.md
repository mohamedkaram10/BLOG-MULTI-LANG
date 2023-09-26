<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

#### Blog System

#### Installation

1\. Run the following commands to install all dependencies

`composer install`

`npm install`

2\. Now rename the .env.example to .env and modify the values as per
your local environment

3\. Run the following command to generate the key

`php artisan key:generate`



#### Database

1\. modify .env the values for database in it as per your local
environment

2\. Place your database host address and port

` DB_HOST=127.0.0.1  `  
` DB_PORT=3306  `  

3\. Go to phpMyAdmin and create database named "laravel" and modified
.env file as database name

`DB_DATABASE=laravel`  
` DB_USERNAME=root  `  
` DB_PASSWORD=  `

4\. Run the following command to run database migration to create tables

`php artisan migrate `


5\. (Optional) Run the following command to insert initial data into
database

`php artisan db:seed`



#### Storage

1\. Run the following command to link storage to public

`php artisan storage:link`



#### Mail Service

1\. Go to <https://mailtrap.io/> and create new account.

2\. Create new inbox and go to inbox setting and put username and
password to .env file

`MAIL_MAILER=smtp`  
`MAIL_HOST=smtp.mailtrap.io`  
`MAIL_PORT=2525`  
`MAIL_USERNAME= {Your username}`  
`MAIL_PASSWORD= {Your password}`  
`MAIL_ENCRYPTION=tls`  
`MAIL_FROM_ADDRESS= {From email address}`  
`MAIL_FROM_NAME= {Your APP NAME}`



#### Run project

1\. Run the following command to compile all assets

`npm run dev`

2\. And Done, now you are ready to start development server

`php artisan serve`

Open <http://127.0.0.1:8000> to see it live there.

3. If you working with mobile app then start server with your host
address

`php artisan serve --host=HOST`

Note following commands around the compilation of assets


| Command                                                                         | Description                                                                 |
| ------------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `npm run                                                                 watch` | For watch files and compiles assets on the fly (also auto reloads browser). |
| `npm run                                                                 dev`   | For compile assets.                                                         |
| `npm run                                                                 prod`  | For compile and prepare assets for production.                              |
