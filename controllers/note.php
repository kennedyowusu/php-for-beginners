<?php

$config = require_once('config.php');

$db = new Database($config['database']);

$title = 'Note';

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->fetch();

 require "views/note.view.php";

?>
