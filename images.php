<?php 

	//converting to base64
	$path = '/home/eduardo/cisco.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

	echo $base64;
	//converting to original filetype(.png)

	$base64_string = $base64;
	$output_file = '/home/eduardo/teste.png';

	$ifp = fopen($output_file, "wb"); 

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1])); 
    fclose($ifp);  
 ?>