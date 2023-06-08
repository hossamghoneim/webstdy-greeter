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

Put this code in footer:
```php
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
<script src="{{ asset('js/dashboard/listen-to-firebase-notification.js') }}"></script>
```

