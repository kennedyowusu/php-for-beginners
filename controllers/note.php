<?php

$config = require_once('config.php');

$db = new Database($config['database']);

$title = 'Note';
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

 require "views/note.view.php";

?>
