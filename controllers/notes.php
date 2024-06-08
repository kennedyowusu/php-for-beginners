<?php

$config = require_once('config.php');

$db = new Database($config['database']);

$title = 'My Notes';

$notes = $db->query('SELECT * FROM notes')->fetchAll();

 require "views/notes.view.php";

?>
