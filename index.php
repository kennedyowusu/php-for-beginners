<?php

require_once('functions/functions.php');

require_once('router.php');

require_once('Database.php');

$config = require_once('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM posts WHERE id = :id";

$queryStatement = $db->query($query, [':id' => $id])->fetch();

echo '<pre>';
print_r($queryStatement);
echo '</pre>';

?>
