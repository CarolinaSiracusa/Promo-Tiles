# Notas de DEV
Al ejecutar la aplicacion se hizo uso de XAMPP para el gestor de Base de Datos y servidor WEB.

## Ejecutar los comandos
- php spark migrate:refresh
- php spark db:seed PromotionsSeeder
- php sparke serve

## Ruta de la aplicacion
http://localhost/promotions/public/promos

# Exercise 2)
## Question 
Do not provide code for this exercise, I want to know how you would do it:
During testing the client realized that the following feature would be useful: the new requirement is to show/hide promo tiles automatically based on a start/end date. Each promo tile will be visible in the site during those dates. How would you do this? What would you do to automatically hide/show a promo tile based on those dates?

## Answer 
For this feature I would redesign the DB to store a *start_date* and a *end_date* for each promo tile.

I would add the appropiate validations for the dates:
- Correct date format
- Ensuring the start date is earlier than the end date

Then, I would update the model to include this new information.
For the functionality, I'll add a new method in the *"PromotionsController"* that will check the current date against the start_date and end_date of each promo tile and decide whether to display it or not.

This also includes modifying the forms for creating and updating promotions to use date pickers, ensuring a user-friendly interface. Additionally, I will include the appropriate JavaScript code to validate the dates.

# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

