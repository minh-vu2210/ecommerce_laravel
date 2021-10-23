## Laravel Ecommerce


An simple Laravel ecommerce application that allows user to create an account, login, add prodcuts to cart and checkout

Users can also view their orders and their status


## Installation and Setup Instructions


Clone down this repository. You will need `composer` and `npm` installed globally on your machine.  

Checkout the `master`branch and follow the installation instructions

Installation:

`composer install`  
`npm install`  

Make a copy of env.exmple and customize it with your database config:  

`cp .env.example .env`  

Create tables for the application

`php artisan migrate`

To Start Server:

`php artisan start`  


## Reflection

This was a 2 week long project. The project goal is to learn how to use Laravel 8 Framework along with how to use Laravel migration, seeder and routes  

One of the main challenges I ran into was Authentication and Session. This lead me to spend a few days on a research on how to maintain the current session until the user logout or closed the browser

At the end of the day, the technologies implemented in this project are Laravel 8, Bootstrap 5, and a small amount of  CSS.
