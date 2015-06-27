<?php

/**
 * Description of BooksDAO
 *
 * @author eduardo
 */
include_once('../Model/Books.php');
include_once("DAO.php");
include_once( "IDAO.php");

class BooksDAO extends DAO implements IDAO {

    public function delete($pk) {
        $con = parent::openConnection();        
        if (isset($pk)) {
            try {
                $sql = "delete from books where id = $pk";
                $stmt = $con->prepare($sql);
                if ($stmt != false) {
                    if ($stmt->execute()) {
                        $rturn = true;
                    } else {
                        $rturn = "impossible to execute $sql";
                    }
                } else {
                    $rturn = "impossible to connect";
                }
            } catch (Exception $exc) {
                $rturn = $exc>getTraceAsString();
            }
        } else {
            $rturn = "Missing parameter";
        }
        return $rturn;
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
            if ($stmt != false) {
                if ($stmt->execute()) {
                    $return = true;
                } else {
                    $return = "impossible to execute";
                }
            } else {
                $return = "impossible to connect";
            }
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
        $cond = true;
        try {
//            realizar a consulta
            $rs = $con->query("SELECT * FROM books where 1=1 $condition");

//                colocar os resultados na variavel $result
            $result = $rs->fetchAll();

            for ($i = 0; $cond == true; $i++) {
                if (isset($result[$i]['id'])) {
                    $b = new Books;
                    $b->setId($result[$i]["id"]);
                    $b->setTitle($result[$i]["title"]);
                    $b->setIbsn($result[$i]["ibsn"]);
                    $b->setPages($result[$i]["pages"]);
                    $b->setPublisher($result[$i]["publisher"]);
                    $b->setLanguage($result[$i]["language"]);
                    $b->setBarcode($result[$i]["barcode"]);
                    $b->setCover($result[$i]["cover"]);
                    $b->setPurchase_date($result[$i]["purchase_date"]);
                    $b->setAuthor($result[$i]["author"]);
                    $b->setEdition($result[$i]["edition"]);
                    $b->setYear($result[$i]["year"]);

                    $rturn[$i] = $b;
                } else {
                    $cond = false;
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $rturn;
    }

    public function listArrayByCondition($date) {
        $con = parent::openConnection();
        $cond = true;
        if (isset($date)) {

            $minusDAte = date('Y-m-d', strtotime("-6 days", strtotime($date)));

            try {
//            realizar a consulta
                $sql = "SELECT * FROM books where purchase_date between '$minusDAte' and '$date'";
                $rs = $con->query($sql);

//                colocar os resultados na variavel $result
                if ($rs != false) {
                    $result = $rs->fetchAll();

                    for ($i = 0; $cond == true; $i++) {
                        if (isset($result[$i]['id'])) {
                            $b[$i]["id"] = $result[$i]["id"];
                            $b[$i]["title"] = ($result[$i]["title"]);
                            $b[$i]["ibsn"] = ($result[$i]["ibsn"]);
                            $b[$i]["pages"] = ($result[$i]["pages"]);
                            $b[$i]["publisher"] = ($result[$i]["publisher"]);
                            $b[$i]["language"] = ($result[$i]["language"]);
                            $b[$i]["barcode"] = ($result[$i]["barcode"]);
                            $b[$i]["cover"] = ($result[$i]["cover"]);
//        	                $b[$i]["cover"] = ("aqui vai dar um número beeeem grande xD");
                            $b[$i]["purchase_date"] = ($result[$i]["purchase_date"]);
                            $b[$i]["author"] = ($result[$i]["author"]);
                            $b[$i]["edition"] = ($result[$i]["edition"]);
                            $b[$i]["year"] = ($result[$i]["year"]);

                            $rturn = $b;
                        } else {
                            $cond = false;
                        }
                    }
                } else {
                    $rturn = "Não há registro de livr os $sql";
                }
                if ($rturn == "") {
                    $rturn = "Não há registro entre as datas $minusDAte e $date \n $sql";
                }
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        } else {
            $rturn = "Data incorreta";
        }
        return $rturn;
    }

}
