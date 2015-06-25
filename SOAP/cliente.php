<?php

$client = new SoapClient(null, array(
    'location' => 'http://localhost/library/SOAP/server.php',
    'uri' => 'http://localhost/library/SOAP/',
    'trace' => 1));

$result = $client->books(date('d-m-Y'));

if (is_soap_fault($result)) {
    trigger_error("SOAP Fault: (faultcode: {$result->faultcode},
	faultstring: {$result->faulstring})", E_ERROR);
} else {
    echo "Resultado Encontrado : <br><br>";
    print_r($result);
}
?>

