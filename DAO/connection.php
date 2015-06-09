<?php
/*
	try
	{
    	$PDO = new PDO("pgsql:host=localhost dbname=library user=postgres password=postgres");
 	} 
 	catch (PDOException  $e) {
    	print $e->getMessage();
 	}

 	$sql = $PDO->exec("select * from users");

 	$data = $sql->fetchAll();
 	if($sql)
 	{
 		$data = $sql->fetchAll();
 	}
 	else
 	{
 		echo "error";
 	}

 	echo $data[0]["id"];
 	*/

 	$db = new PDO('pgsql:host=localhost dbname=library user=postgres password=postgres');                                       
	$res = $db->query(  "SELECT * FROM users"  )->fetchAll(PDO::FETCH_ASSOC);
	var_dump($res);
?>