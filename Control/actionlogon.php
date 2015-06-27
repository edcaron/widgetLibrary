<?php

require_once("../Model/Users.php");
require_once("../DAO/UsersDAO.php");

if ($_GET['act'] == 'logout') {
    session_start();
    session_destroy();
    $msg ="false";
} else {


    $book = new Users();
    $bookDAO = new UsersDAO;

    $book->setLogin($_POST["inputEmail"]);
    $book->setPassword($_POST["inputPassword"]);

    $msg = $bookDAO->autenticate($book);
}
if ($msg != "false") {
    session_start();
    $_SESSION['user'] = $msg;
    header("Location:../books.php?");
} else {
    header("Location:../index.php?msg=$msg");
}