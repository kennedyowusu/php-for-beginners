<?php

class Database {

 public $connection;

 public function __construct()
 {
  $dsn = 'mysql:host=localhost;dbname=php_for_beginners;user=root;password=;charset=utf8mb4;port=3306;';
  $this->connection = new PDO($dsn);
 }

 public function query($sql)
 {
  $statement = $this->connection->prepare($sql);
  $statement->execute();

  return $statement;
 }
}
