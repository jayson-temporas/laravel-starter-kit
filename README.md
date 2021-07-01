![Build Status](https://www.travis-ci.com/jayson-temporas/laravel-starter-kit.svg?token=1GpTbDphvpjpfsoCwGYb&branch=master)

## Laravel Starter Kit

This laravel starter kit is designed to get you up and running faster and worry less on settings and configuration.

This is ideal for your next TDD laravel project.

## What's included

- Laravel 7
- Laravel UI Authentication
- PHPUnit
- Laravel Debugbar


## Get Started

You need to have composer and npm installed in your system. 
Clone this repository, navigate to project root then run

```
composer install
```

```
npm install && npm run dev
```

Then

```
php artisan migrate
```

## What's in migrations

- users
- password_resets
- failed_jobs
- tasks 

## What's in database factories

- TaskFactory
- UserFactory

## PHPUnit Tests

Database use for testing is Sqllite and it will be created in memory when the test starts and will be deleted after running all the tests.

See phpunit.xml for more configuration.

### Feature Tests

- Homepage Access
- Manage Tasks
- User Login
- User Registration

### Unit Tests

- User
- Task

## Why I added Task Collection

I added Feature and Unit Tests for Task collection and created a CRUD so you can use it as guide and get you up and running on your PHPUnit Tests faster.

Feel free to delete it if you want.

## Laravel Starter Kit

This laravel starter kit is designed to get you up and running faster and worry less on settings and configuration.

This is ideal for your next TDD laravel project.

## What's included

- Laravel 7
- Laravel UI Authentication
- PHPUnit
- Laravel Debugbar


## Get Started

You need to have composer and npm installed in your system. 
Clone this repository, navigate to project root then run

```
composer install
```

```
npm install && npm run dev
```

Then

```
php artisan migrate
```

## What's in migrations

- users
- password_resets
- failed_jobs
- tasks 

## What's in database factories

- TaskFactory
- UserFactory

## PHPUnit Tests

Database use for testing is Sqllite and it will be created in memory when the test starts and will be deleted after running all the tests.

See phpunit.xml for more configuration.

### Feature Tests

- Homepage Access
- Manage Tasks
- User Login
- User Registration

### Unit Tests

- User
- Task

## Why I added Task Collection

I added Feature and Unit Tests for Task collection and created a CRUD so you can use it as guide and get you up and running on your PHPUnit Tests faster.

Feel free to delete it if you want.
