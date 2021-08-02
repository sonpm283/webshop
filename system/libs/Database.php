<?php

class Database extends PDO {

    public function __construct($connect,$username,$password)
    {
        parent::__construct($connect,$username,$password);
    }

    public function select($table) {
        $sql = "SELECT * FROM $table";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

}