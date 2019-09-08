# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Features
- User authentication base on JWT
- User Profile controllers
- Use a package for generate hash
- Test cases class sample for endpoints 

## Installation
To install the Lumen you should take a clone from the repository:

`git clone https://github.com/arshiyan/memberShipLumen.git`
Then go to project with cd

`cd memberShipLumen `
Then install packages with composer:

`composer install`

## Configuration

Rename .env.example to .env.

`cp .env.example .env`

## Generate secret key

Generate secret key for JWT and update .env file:

`php artisan jwt:secret
`
## Serving Your Application

To serve your project:

`php -S localhost:8000 -t public
`
## Unit Test

`vendor\bin\phpunit`

## Packages

[JWT](https://github.com/tymondesigns/jwt-auth "JWT")
[Lumen Generator](https://github.com/flipboxstudio/lumen-generator "Lumen Generator")
[Guzzle, PHP HTTP client](https://github.com/guzzle/guzzle "Guzzle, PHP HTTP client")
[phpunit](https://github.com/sebastianbergmann/phpunit "phpunit")


## routes

<img src="https://github.com/arshiyan/memberShipLumen/blob/master/ScreenShot/Screen%20Shot%202019-09-07%20at%2018.36.14.png" width="90%"></img> 

## ScreenShot

<img src="https://github.com/arshiyan/memberShipLumen/blob/master/ScreenShot/Screen%20Shot%202019-09-07%20at%2018.32.56.png" width="90%"></img> 
<img src="https://github.com/arshiyan/memberShipLumen/blob/master/ScreenShot/Screen%20Shot%202019-09-07%20at%2018.34.10.png" width="90%"></img>
