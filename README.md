# Socialite with lumen

It is a symple application (boilerplate) where you will be able to learn how to use [Socialite](https://github.com/laravel/socialite) for social login. Though I am using return view, you will find a way out to attach social login with lumen. I have attached [Passport](https://github.com/dusterio/lumen-passport) for token based authentication. 

N.B: If you need only token based authentication you don't need to use [Socialite](https://github.com/laravel/socialite)

## Official Documentation

 - **[Lumen](https://lumen.laravel.com/docs/8.x)**
 - **[Socialite](https://github.com/laravel/socialite)**
 - **[Passport](https://github.com/dusterio/lumen-passport)**
 - **[Lumen Generator](https://github.com/flipboxstudio/lumen-generator)** (You can run command like Laravel)

## Contributor

- **[Hosne Mobarak Rubai](https://github.com/hmrubai/)**

## Instructions

You have to create an app under a project from the [Google console](https://console.developers.google.com/). For [github](https://github.com/settings/applications). After creating the app, you will get credentials like:

Google App:
```
    Client ID: XXXXXXXXXXXXXXXXXXX.apps.googleusercontent.com
    Client secret: xxxxxxxxxxxxxxxxxxxx
    Creation date: February 8, 2021 at 1:00:00 PM GMT+1
```

GitHub App: 
![alt text](https://bims24ltd.com/images/gitgub-app-screen.png)

### Update .env

```
    GOOGLE_CLIENT_ID=XXXXXXXXXXXXXXXXXXX.apps.googleusercontent.com
    GOOGLE_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxx
    GOOGLE_REDIRECT=http://localhost:8000/success

    GITHUB_CLIENT_ID=XXXXXXXXXXXXXXXXXXX
    GITHUB_CLIENT_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    GITHUB_REDIRECT=http://localhost:8000/github/success
```

### Update Your config/services.php

```
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('GITHUB_REDIRECT'),
    ],
```
