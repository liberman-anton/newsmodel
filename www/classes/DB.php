<?php

class DB
{

    private $dbh;
    private $className = 'stdClass';

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }


    public function query($sql, $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
}
