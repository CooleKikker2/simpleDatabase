# Simple database

## Introduction

> Simple Database is a very simple PHP API for using an SQL-Database with only a few lines of code. Use a full working SQL database with only a few lines of code.

## Code Samples

> <b>Connect to database</b><br><br>
> With this very simple API you can simpely connect to the SQL-databse using this 2 simple lines of code:
```php
$database = new Database("Your Servername", "Your Database User", "YourUserPassword", "YourDatabaseName");
$database->connect();
```

## Installation

> To install this API you can simply download the files on this github and put it into your root directory. Enable the API by adding the following line of code at the top of your PHP file
```php
require_once("config/database/database.php");
```