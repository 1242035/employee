##Employee Directory ##

**Employee Directory **is a sample app that demonstrates how to build modern web applications using different frameworks. This version is built with Laravel and Twitter Bootstrap.

### Installation ###

* `git clone https://github.com/HoangLaravel/employee projectname`
* `cd projectname`
* `composer install`
* `php artisan key:generate`
* Create a database and inform *.env*
* `php artisan migrate --seed` to create and populate tables
* Inform *config/mail.php* for email sends
* `php artisan vendor:publish` to publish filemanager
* `php artisan serve` to start the app on http://localhost:8000/

In the IDE, start Laravel 5 Example via `Run > Start Laravel 5 Example` and access your site via `Preview > 8000`.

### Include ###

* [Bootstrap SASS](http://getbootstrap.com) for CSS and jQuery plugins
* [Font Awesome](http://fortawesome.github.io/Font-Awesome) for the nice icons
* Laravel Elixir for compile CSS and JS.

### Features ###

* Home page
* Custom Error Page 404
* Authentication (login, logout, change-password, add administrator, mail confirmation)
* Department management
  ** Add department
  ** List departments
  ** View department detail
  ** View employees in a department
  ** Edit department
  ** Delete department
* Employee management
  ** Add employee
  ** View employee profile
  ** Search for employee
  ** Edit employee
  ** Delete employee

### Packages included ###

*
*

### Tricks ###

To test application the database is seeding with users :

* Administrator : email = cam@foobla.com, password = 123456
