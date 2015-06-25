<?php

$server = new SoapServer(null, array('uri' => "http://localhost/library/SOAP"));

function books($date) {
    return "resposta do servidor é essa mlk";
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
