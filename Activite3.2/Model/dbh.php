<?php

class dbh{
    private $host= "localhost";
    private $user= "root";
    private $pwd= "root";
    private $dbName=" dbhrania";

    protected function connect (){

   
try
{
    $dsn = 'mysql:host='. $this->host .';dbname='  . $this->dbName;
    $db = new PDO($dsn,$this->user,$this->pwd);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

}
}
