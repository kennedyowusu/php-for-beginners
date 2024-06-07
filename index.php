<?php

require_once('functions/functions.php');

require_once('router.php');

require_once('Database.php');

$db = new Database();

$queryStatement = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

foreach ($queryStatement as $post) {
 echo $post['description'] . '<br>';
}
