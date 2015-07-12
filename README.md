# widgetLibrary

WidgetLibrary is a simple php software to register books and get your informations using PHP Soap.

Instructions to install:
-Download and put into your apache dir;
-Create the database using a file Documentation/sql_library.sql;
-Edit the file DAO/connection.php with informations with your database;
-The default credentials to logon is admin admin;

The web service returns information of the books purchased in the last 7 days, based on a parameter sent.
To use web service go to /SOAP/server.php. The name of function is books(). She needs a date parameter (Y-m-d).

PHP 5
Apache 2
Postgres
