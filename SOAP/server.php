<?php

$server = new SoapServer(null, array('uri' => "http://localhost/library/SOAP"));

function books($date) {
    require_once '../DAO/BooksDAO.php';
    $a = new BooksDAO();
    $saida = $a->listArrayByCondition($date);
    return $saida;
}

$server->addFunction("books");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server->handle();
} else {
    $functions = $server->getFunctions();
    foreach ($functions as $func) {
        print $func . "<br>";
    }
}
?>
