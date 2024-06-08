<?php

class Database {

 public $connection;

 public function __construct($config, $username = 'root', $password = '')
 {

  $dsn = 'mysql:' . http_build_query($config, '', ';');

  $this->connection = new PDO($dsn, $username, $password, [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
 }

 public function query($sql, $parameters = [])
 {
  $statement = $this->connection->prepare($sql);

  $statement->execute($parameters);

  return $statement;
 }
}
