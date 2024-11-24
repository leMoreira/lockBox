<?php

// Representação de um registro no banco de dados em forma de classe
class Database{

private $db;

public function __construct($config)
{

  

    $connectionString = $config['driver'].':'. $config['database'];


$this->db = new PDO($connectionString);
}

public function query($query, $class = null, $params = [])
{
$prepare = $this->db->prepare($query);

if($class){
    $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
}

$prepare->execute($params);
return $prepare;
}

}

