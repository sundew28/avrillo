# Avrillo Code Test

An application to send API request and receive response as JSON. I have used laravel 10 framework to create the application and a basic token authentication.
To make api calls to https://api.kanye.rest/. I have implemented the Laravel manager design pattern in the application and seperated the api call to Kanye seperate so that in future we can add different REST API's.

## Requirements

- PHP :- 8.1 or above
- MySQL :- 5.6 or above
- Composer :- To install the dependencies
- Postman :- To test the API calls

## Install

Clone the repo to your working directory using your favorite CLI console (eg: GitBash, PowerShell, cmd or any of your choice) 

```bash
$ git clone https://github.com/sundew28/avrillo.git
```

Once you are done cloning the repo next would be to run composer in your console to install laravel framework dependencies by running the below composer command. Make sure you have composer installed

Via Composer

```bash
$ composer install
```

I have setup an API key for the purpose of the code test for use which is basic but will validate aganist the request API key being sent to the application.
A simple middleware is setup for this purpose to validate the key in the api routes.

```bash
$ API-KEY : p2lbgWkFrykA4QyUmpHihzmc5BNzIABq
```
You can use the above key while testing the api endpoints.


## Security

For API authentication / security i have implemented a simple token authentication while making calls to th endpoints to grab random quotes. A default API key is etup for use as mentioned above. You will need to send this in your postman as query param as below. The key is already set in the .env file for you to use. If not a proper key is passed you will encounter a 'unauthorized' message.

```
Param : api_token
Value : p2lbgWkFrykA4QyUmpHihzmc5BNzIABq

```

## Testing the Application

The API endpoint require a "get" request to be made which is already made mandatory in the api route file for secure transfer of data.

### Task 

The instructions were to make API calls to grab random 5 quotes.



## Test case

For running the test case just follow the command below in your console
```bash
php artisan test
```

## Improvements

- I would like to make improvement to the error capturing by making use of error handler in laravel, make use of JsonResponse error handling
- Check the quality of code by using tools like PHPsniffer, PHP-CS-Fixer with PSR2 and Symfony standards (much extra checks, closer to Laravel than PSR2).
- Writing unit tests and feature tests to ensure API functionality better. The current test is just basics.
- I have used the repository design pattern for this API development. We can use the Laravel manager/builder design pattern based on requirement.
- Adding caching(redis) service for better performance.
