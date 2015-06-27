<?php

function connect() {    
    try {
        $conn = new PDO('pgsql:host=localhost dbname=library user=postgres password=postgres');
    } catch (Exception $ex) {
        print $e->getMessage();
    }
    return $conn;
}


/** teste de querys
try {
    $rs = $conn->query("SELECT * FROM users");
    while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
        echo $row->id . "<br />";
        echo $row->login . "<br />";
        echo $row->password . "<br />";
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
 *
 **/
?>