<?php

class DAO {

    protected $con = null;
    protected $host = "localhost";
    protected $dbname = "library";
    protected $user = "postgres";
    protected $password = "postgres";

    public function openConnection() {

        try {

            $this->con = new PDO(
                    'pgsql:host=' . $this->host . ' dbname=' . $this->dbname . ' user=' . $this->user . ' password=' . $this->password . ''
            );

            $this->con->exec("SET NAMES utf8");

            if (!$this->con)
                throw new Exception("Não foi possível contectar-se à base de dados.");
            return $this->con;
        } catch (PDOException $e) {

            //tratar  p/ arquivo de log
            echo $e->getLine() . " " . $e->getMessage();
            exit();
        }
    }

    protected function closeConnection() {
        if ($this->con != null)
            $this->con = null;
    }

    public function __destruct() {
        $this->closeConnection();
    }

}

?>