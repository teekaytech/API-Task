## CRUD API Task

This repository contains an implementation of RESTful API task. The API provides endpoints through which users can register, login, 
add book to a database, get all books from the database, get a single book and delete a book from the database.

## Built With:
- PHP 7.3
- Laravel 8.12
- Sanctum (Authentication System)
- MySQL
- Postman (Testing)
- Heroku (JawsDB MySQL Addon)
- Git/GitHub GitFlow
- PHPStorm

### Base (Live)  URL: https://pumpkin-cake-55723.herokuapp.com/

## Getting Started
### Setup
To setup this project on your development environment, follow the steps below:
- On the project GitHub page, navigate to the main page of the repository ([this page](https://github.com/teekaytech/API-Task)).
- Under the repository name, locate and click on a green button named `Code`.
- Copy the project URL as displayed (`https://github.com/teekaytech/API-Task.git`).
- If you're running Windows Operating System, open your command prompt. On Linux, Open your terminal.
- Change the current working directory to the location where you want the cloned directory to be made. Leave as it is if the current location is where you want the project to be.
- Type git clone, and then paste the URL you copied in Step 3.
  `$ git clone https://github.com/teekaytech/API-Task.git`
- Press the `Enter` button. Your local copy will be created.

### Starting the app
- To install the dependencies on your local machine, run `composer install` on your terminal.
- Optionally, you can run `npm install` to setup other node dependencies as the need arises.
- Create a copy of `.env.example`, rename the copy to `.env`
- Run `php artisan key:generate` to generate the app key.
- Create a database with a suitable name (In my case, I used api_task).
- Configure the database credentials (db name, port, username, password, etc) in the `.env` file. 
- Run `php artisan migrate` to setup the application database
- To create dummie data for testing purpose, run `php artisan db:seed`.
- Finally, you can now start the app with `php artisan serve` command.

Note: you must have `PHP >= V7.3`, `Composer`, & `MySQL` installed on your PC to setup the app locally.

## API Documentation
> The base URL for all endpoints is `https://pumpkin-cake-55723.herokuapp.com/`. Some endpoints requires authentication while some does not. 
> The authentication process is implemented with [Laravel Sanctum](https://laravel.com/docs/8.x/sanctum).

**Summary of Available API Endpoints**

| Endpoint | Feature | Authentication |
| -------- | -------- | -------------- |
| POST /api/register | Registers a new user | No |
| POST /api/login | Logs in a user | No |
| POST /api/books | Store a new book to db | Yes |
| GET /api/books | Fetch all available books | No |
| DELETE /api/books/:id | Delete a book from db | Yes |
| GET /api/books/:id | Fetch a book from db | No |

**Sampling a request that DOES NOT require authentication**
__GET /api/books__: Fetch all available books.
Endpoint: `https://pumpkin-cake-55723.herokuapp.com/api/books`

PHP CURL Request (Postman):
```injectablephp
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pumpkin-cake-55723.herokuapp.com/api/books',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
```

**Sampling a request that DOES require authentication**
__POST /api/books__: Create a new book.
Endpoint: `https://pumpkin-cake-55723.herokuapp.com/api/books`

PHP CURL Request (Postman):
```injectablephp
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://pumpkin-cake-55723.herokuapp.com/api/books',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('title' => 'Who the crown fits','author' => 'Keye Abiona','pages' => '120'),
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer 2|Hl6nVpCVub70i28ROJYVQoLZdEyjiqkyyastHH3L'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
```

## Author
**Taofeek OLALERE**
- [Portfolio](https://taofeekolalere.me)
- [Github](https://github.com/teekaytech/)
- [Twitter](https://twitter.com/ola_lere)
- [LinkedIn](https://www.linkedin.com/in/olaleretaofeek/)

## Contributing

Contributions, issues and feature requests are welcome!

1. Fork the Project: https://github.com/teekaytech/API-Task.git
2. Make your changes
2. Open a Pull Request

Feel free to check the [issues page](https://github.com/teekaytech/API-Task/issues).

## Show your support

Give a :star: if you like this project!

## Acknowledgements

- [Heroku Documentation](https://devcenter.heroku.com/articles/getting-started-with-laravel)
- [JOel Okoromi on Dev.to](https://dev.to/okmarq/deploying-a-laravel-application-to-heroku-with-a-mysql-database-1gi3)
- [AFTj Digital Marketing and Solutions](https://dev.to/okmarq/deploying-a-laravel-application-to-heroku-with-a-mysql-database-1gi3)
- [Adre Castelo on Total Blog](https://www.toptal.com/laravel/restful-laravel-api-tutorial)
- [Laravel Sanctum Docs](https://laravel.com/docs/8.x/sanctum)

