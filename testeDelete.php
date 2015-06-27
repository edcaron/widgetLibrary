<?php

require_once("DAO/BooksDAO.php");

$d = new BooksDAO();

$a = $d->delete("9");

var_dump($a);