<?php

class DB
{

    private $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function query($sql, $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }
}
