# Socialite with lumen

It is a symple application (boilerplate) where you will be able to learn how to use [Socialite](https://github.com/laravel/socialite) for social login. Though I am using return view, you will find a way out to attach social login with lumen. I have attached [Passport](https://github.com/dusterio/lumen-passport) for token baised authentication. 

N.B: If you need only token baised authentication you don't need to use [Socialite](https://github.com/laravel/socialite)

## Official Documentation

 - **[Lumen](https://lumen.laravel.com/docs/8.x)**
 - **[Socialite](https://github.com/laravel/socialite)**
 - **[Passport](https://github.com/dusterio/lumen-passport)**
 - **[Lumen Generator](https://github.com/flipboxstudio/lumen-generator)** (You can run command like Laravel)

## Contributor

- **[Hosne Mobarak Rubai](https://github.com/hmrubai/)**

## Instructions

You have to create a project from the [Google console](https://console.developers.google.com/). After creating the project you will get credentials like:

```
    Client ID: XXXXXXXXXXXXXXXXXXX.apps.googleusercontent.com
    Client secret: xxxxxxxxxxxxxxxxxxxx
    Creation date: February 8, 2021 at 1:00:00 PM GMT+1
```

### Update .env

```
    GOOGLE_CLIENT_ID=XXXXXXXXXXXXXXXXXXX.apps.googleusercontent.com
    GOOGLE_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxx
    GOOGLE_REDIRECT=http://localhost:8000/success
```

### Update Your config/services.php

```
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],
```
