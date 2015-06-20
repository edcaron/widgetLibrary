<?php

include_once 'UsersDAO.php';
include_once '../Model/Users.php';

$a = new UsersDAO();
$us = new Users();

$us->setLogin("admian");
$us->setPassword("admin");


$saida = $a->autenticate($us);

echo "saida: ".$saida."</br>";



