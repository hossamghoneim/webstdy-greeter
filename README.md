# Webstdy Firebase Notification

- Load controllers
- Load views
- Register migrations

### Installation

Install wia composer:

```
composer require Webstdy/firebase-notification
```

And add the service provider in config/app.php:

```php
Yk\LaravelPackageExample\LaravelPackageExampleProvider::class,
```

Then register Facade class aliase:

```php
'FacadeExample' => Yk\LaravelPackageExample\Facades\FacadeExample::class,
```

Publish assets:

```
php artisan vendor:publish
```

