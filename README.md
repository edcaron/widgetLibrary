# widgetLibrary

WidgetLibrary is a simple php Library software to register books and get some informations about them using PHP Soap.

## Instructions to install:
* Download and put into your apache dir;
* Create the database using the file Documentation/sql_library.sql;
* Edit the file DAO/connection.php with informations if your database;
* The default credentials to logon are admin admin;

## Using the WebService
The web service returns information of the books purchased in the last 7 days, based on a parameter sent.
To use web service go to /SOAP/server.php. The name of function is books(). You need to sent a date parameter in the format (Y-m-d).

## Tecnologies used
* PHP 5
* Apache 2
* PostgreSQL
* Bootstrap
