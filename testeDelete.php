<?php

require_once("DAO/BooksDAO.php");

$d = new BooksDAO();

echo $d->delete("10");