<?php

/**
 * Description of BooksDAO
 *
 * @author eduardo
 */
include_once("../Model/Books.php");
include_once("DAO.php");
include_once( "IDAO.php");

class BooksDAO extends DAO implements IDAO {

    public function delete($pk) {
        
    }

    public function findByPK($pk) {
        
    }

    public function insert($object) {
        $con = parent::openConnection();
        $return = false;
        try {
            $sql = "INSERT INTO books"
                    . " (id, title, ibsn, pages, publisher, year, language, barcode, cover, purchase_date, author, edition) VALUES"
                    . "(default, "
                    . "'" . $object->getTitle() . "'," . $object->getIbsn() . "," . $object->getPages() . ",'" . $object->getPublisher() . "','" . $object->getYear() . "','" . $object->getLanguage() . "'," . $object->getBarcode() . ",'" . $object->getCover() . "','" . $object->getPurchase_date() . "','" . $object->getAuthor() . "'," . $object->getEdition()
                    . ")";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $return = true;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            $return = $exc->getTraceAsString();
        }
        return $return;
    }

    public function update($object) {
        
    }

    public function listByCondition($condition) {
        $con = parent::openConnection();
        try {
//            realizar a consulta
            $rs = $con->query("SELECT * FROM books where 1=1 $condition");

//                colocar os resultados na variavel $result
            $result = $rs->fetchAll();

            var_dump($result);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

//put your code here
}
