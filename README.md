Gonzales Bread House Management System WebApp
===============================================

This is a fork from the original WebApp - Money Manager Ex, this will be used to handle the financial transaction for my bakery business so that I can easily transact with my co-owners in regards with the finances.

## Server-side requirements

 * Webserver with PHP 5.4 or higher (tested on Apache, IIS and nginx)
 * PDO_SQLite extension (enabled by default on PHP 5.2 or higher)
 * Full rights on the WebApp subfolder

## Client-side requirements

 * Web browser fully compatible with HTML5
 * Optimized for portrait view on mobile device

### Basic PHP Server 

1. Run the following commands after cloning the repo:

``` 
cd <repo>/WebApp/
PHP -S http://127.0.0.1/8000
```
2. Open the link inside the browser

### Docker Way 

Run the following commands after cloning this repo:

1. `docker build -t webmmx:latest .`

2. `docker run -d -p <your available port>:80 webmmx:latest`

## Upgrade

 1. Delete all files from webserver except for:
    * configuration_user.php
    * MMEX_New_Transaction.db
 2. Unzip all files in the same folder as the original installation.
 3. The first time you open the WebApp, it automatically upgrades the database to new version.
