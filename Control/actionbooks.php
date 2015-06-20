<?php

require_once("../Model/Books.php");
require_once("../DAO/BooksDAO.php");

$book = new Books();
$bookDAO = new BooksDAO();



//$book->setId($_POST['id']);
//$book->setTitle($_POST['title']);
//$book->setIbsn($_POST['ibsn']);
//$book->setPages($_POST['pages']);
//$book->setPublisher($_POST['publisher']);
//$book->setYear($_POST['year']);
//$book->setLanguage($_POST['language']);
//$book->setBarcode($_POST['barcode']);
//$book->setPurchase_date($_POST['purchase_Date']);
//$book->setAuthor($_POST['author']);
//$book->setEdition($_POST['edition']);
//$msg = $bookDAO->insert($book);


$arquivo = $_FILES['cover'];


if(isset($_FILES['cover'])){
    echo "Tem foto";
    var_dump($arquivo);
}else{
    echo "Nao tem foto";
    var_dump($arquivo);
}

/*
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $arquivo["name"], $ext); // Gera um nome único para a imagem 
$imagem_nome = "img." . $ext[1];
// Caminho de onde a imagem ficará 
$imagem_dir = "../uploads/" . $imagem_nome; // Faz o upload da imagem 
move_uploaded_file($arquivo["tmp_name"], $imagem_dir);

//converting to base64
$path = $imagem_dir;
$type = pathinfo($path, PATHINFO_EXTENSION);
$data = file_get_contents($path);
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

echo $base64;


$base64_string = $base64;
$output_file = '../uploads/lol.png';
$ifp = fopen($output_file, "wb");

$data = explode(',', $base64_string);

fwrite($ifp, base64_decode($data[1]));
fclose($ifp);

//echo "antes do echo";
//echo "<img src='../uploads/lol.png'></img>'";

*/



//$book->setCover($base64);

//
//if ($msg == !"false") {
//    header("Location:../books.php?msg=$msg");
//} else {
//    header("Location:../books.php?msg=$msg");
//}