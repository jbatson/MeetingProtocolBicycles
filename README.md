# Simple Web App with CodeIgniter 4

## Description
Simple web app using a framework. 
Chose CodeIgnighter and Sqlite3 for it's simplicity. Never used either before it was very straighforward and easy to use.

Files Added:

/app/Controllers/Bicycles.php
/app/Models/BicyclesModel
/app/Views/bicycle_start.php
/app/Views/build_bicycle.php
/app/Views/error.php
/app/Views/header.php
/app/Views/footer.php

It also uses an Sqlite database:
/writeable/bicycles.db

## To Run it?

I ran it with PHP 8.1 and Apache 2.4 on Rocky Linux 8.9, but if you just have PHP installed there are routes 
set up to run it from the command line.

cd /public
php index.php
php index.php bicycles

Although I did not try this, there is a built in server that you can start.

php spark serve

and view the pages at http://localhost:8080

