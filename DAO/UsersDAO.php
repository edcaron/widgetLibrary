<?php

include_once("../Model/Users.php");
include_once("DAO.php");
include_once( "IDAO.php");

class UsersDAO extends DAO implements IDAO {

    public function delete($pk) {
        
    }

    public function findByPK($pk) {
        
    }

    public function autenticate($object) {
        //variavel $con recebe o retorno da funcao openConnection da classe DAO
        // o retorno e a conexao com o banco de dados        
        $con = parent::openConnection();
        try {
//            realizar a consulta
            $sql = "SELECT id, login FROM users where login = '" . $object->getLogin() . "' and password = '" . $object->getPassword() . "';";
            $rs = $con->query($sql);

//                colocar os resultados na variavel $result
            $result = $rs->fetchAll();

            if (isset($result[0]["id"])) {
                $return = $result[0]["login"];
            } else {
                $return = "false";
            }
        } catch (PDOException $e) {
            echo $e->getLine() . " " . $e->getMessage();
        }
        return $return;
    }

    public function insert($object) {
        //variavel $con recebe o retorno da funcao openConnection da classe DAO
        // o retorno e a conexao com o banco de dados
        $con = parent::openConnection();
        try {
            $stmt = $con->prepare("INSERT INTO users(id, login, senha) VALUES(default '" . $object->login . "'," . $object->password . "')");
            $stmt->execute();
            return true;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return $exc->getTraceAsString();
        }
    }

    public function listAll() {
        //variavel $con recebe o retorno da funcao openConnection da classe DAO
        // o retorno e a conexao com o banco de dados
        $con = parent::openConnection();
        try {
//            realizar a consulta
            $rs = $con->query("SELECT * FROM users");

//                colocar os resultados na variavel $result
            $result = $rs->fetchAll();

            var_dump($result);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function update($object) {
        //variavel $con recebe o retorno da funcao openConnection da classe DAO
        // o retorno e a conexao com o banco de dados
        $con = parent::openConnection();
        try {

            $stmt = $con->prepare("update users set login='" . $object->login . "', password='" . $object->password . " where id = ." . $object->id . ")");
            $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function listByCondition($condition) {
        
    }

}
