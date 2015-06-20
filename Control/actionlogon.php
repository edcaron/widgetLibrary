<?php

require_once("../Model/Users.php");
require_once("../DAO/UsersDAO.php");

$book = new Users();
$bookDAO = new UsersDAO;

$book->setLogin($_POST["inputEmail"]);
$book->setPassword($_POST["inputPassword"]);

//$fp = fopen("/var/www/html/library/my-errors.log", "a");
//
//// Escreve "exemplo de escrita" no bloco1.txt
//$escreve = fwrite($fp, "teste ".$_POST["inputEmail"]);
//
//// Fecha o arquivo
//fclose($fp);

$msg = $bookDAO->autenticate($book);


if ($msg == !"false") {
    header("Location:../index.php?msg=$msg");
} else {
    header("Location:../index.php?msg=$msg");
}