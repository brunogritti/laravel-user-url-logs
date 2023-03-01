## User Activity Logging for Laravel

Log URLs that user access automatically with this Trait

# Instaling

Require this package in your composer.json and update composer. 

    `composer require brunogritti/laravel-user-url-logs` 


# Using

Use `php artisan make:user-url-logs` to run migration

Apply `use LogURLs` to the models you want to keep track of

## Roadmap

* Save each column when created
* Separate model saving in another function

## License

This Laravel package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)