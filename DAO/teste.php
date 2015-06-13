<?php

include_once 'UsersDAO.php';
include_once '../Model/Users.php';

$a = new UsersDAO();
$us = new Users(1, "admin", "admin");


$a->autenticate($us);



