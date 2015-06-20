<?php

require_once("../Model/Books.php");
require_once("../DAO/BooksDAO.php");

$book = new Books();
$bookDAO = new BooksDAO();
$action = "insert";

$action = $_GET['act'];

$book->setId($_POST['id']);
$book->setTitle($_POST['title']);
$book->setIbsn($_POST['ibsn']);
$book->setPages($_POST['pages']);
$book->setPublisher($_POST['publisher']);
$book->setYear($_POST['year']);
$book->setLanguage($_POST['language']);
$book->setBarcode($_POST['barcode']);
$book->setPurchase_date($_POST['purchase_date']);
$book->setAuthor($_POST['author']);
$book->setEdition($_POST['edition']);
$file = $_FILES['cover'];

preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $file["name"], $ext); // Name for image
$imagem_nome = "img." . $ext[1];
$imagem_dir = "../uploads/" . $imagem_nome; // upload
move_uploaded_file($file["tmp_name"], $imagem_dir);

$book->setCover(imgToBase64($imagem_dir));

if ($action == "insert") {
    $msg = insert($book, $bookDAO);
} else if ($action == "") {
    echo "nao etro";
}


if ($msg == 1) {
    header("Location:../books.php?msg=$msg");
} else {
    echo $msg;
    header("Location:../books.php?msg=$msg");
}

function insert($book, $bookDAO) {
    $msg = $bookDAO->insert($book);
    return $msg;
}

function toList($bookDAO) {
    $msg = $bookDAO->listByCondition("and 2=2");
    return $msg;
}

function imgToBase64($img_dir) {
    $return = 'null';
    try {
        $path = $img_dir;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $return = $base64;
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
        $return = $exc->getTraceAsString();
    }
    return $return;
}
