<?php

include_once 'BooksDAO.php';

$a = new BooksDAO();
$data = date('d-m-Y');
$saida = $a->listArrayByCondition(date('Y-m-d'));

var_dump($saida);
/*for ($i = 0; $i < 9; $i++) {
    echo $saida[$i]->getId() . "\n";
    echo $saida[$i]->getAuthor() . "\n";
    echo $saida[$i]->getAuthor() . "\n";
//    echo $saida[$i]->getCover() . "\n";
    echo $saida[$i]->getEdition() . "\n";
    echo $saida[$i]->getIbsn() . "\n";
    echo $saida[$i]->getLanguage() . "\n";
    echo $saida[$i]->getPages() . "\n";
    echo $saida[$i]->getPublisher() . "\n";
    echo $saida[$i]->getPurchase_date() . "\n";
    echo $saida[$i]->getTitle() . "\n";
  echo $saida[$i]->getYear() . "\n";
    echo "\n";

   
}
*/


