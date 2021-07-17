![Build Status](https://www.travis-ci.com/jayson-temporas/laravel-starter-kit.svg?token=1GpTbDphvpjpfsoCwGYb&branch=master) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

## Laravel Starter Kit

This laravel starter kit is designed to get you up and running faster and worry less on settings and configuration.

This is ideal for your next TDD laravel project.

## What's included

- Laravel 7
- Laravel UI Authentication (Login and Registration with Email verification)
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

- failed_jobs
- jobs
- password_resets
- tasks 
- users

## What's in database factories

- TaskFactory
- UserFactory

## What's in Laravel Jobs

**SendTaskCreatedEmail**
Email user on every task he/she created.
*This is just a sample laravel job that sends email notification. You can use it as guide for your new Laravel Jobs. You can also remove it at TaskController@store and at Test\Feature\ManageTasksTest@user_must_receive_email_after_creating_a_task*

**SendTasksSummaryEmail**
Email user the total number of tasks he/she created at the end of  each month.
*This job is use in the Task Scheduling example. You can remove it at App\Console\Kernel@schedule*
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