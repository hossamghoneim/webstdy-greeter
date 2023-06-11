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

Create js file and set configurations in it:

```
javascript /*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
    apiKey: "", //set firebase apikey
    authDomain: "", //set firebase authDomain
    projectId: "", //set firebase projectId
    storageBucket: "", //set firebase storageBucket
    messagingSenderId: "", //set firebase messagingSenderId
    appId: "", //set firebase appId
    measurementId: "" //set firebase measurementId
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {
    console.log(
        "[your-file-name.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = payload.notification.alert_title;
    const notificationOptions = {
        // body: payload.data['cm.notification.description'],
        body: "BACKGROUND BODY",
        icon: faviconPath,
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});
```

Put this code in footer:
```javascript
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>
<script src="{{ asset('path-of-your-js-folder/listen-to-firebase-notification.js') }}"></script>
```

