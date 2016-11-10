# Crossover - Software Engineer - PHP Assignment

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

This document specified the setup and usage of applicatino to delivery pathology lab reports
 

## Setup

Requirements 

Consider that you have php5.6 or latest, composer and git


- Clone this project on your local machine or download the zip file
- Do composer install
- Generate your app key with: php artisan key:generate
- Create the mysql database for example: lab or import the file database/create_database.sql in your mysql
- Configure your .env with your database configurations (user, password, database)
- Do php artisan migrate for create your tables and php artisan db:seed to populate your database, or import the contents of tables with file database/database.sql in your mysql


## Using




## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to owner or open a issues. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
