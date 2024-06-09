<?php

$config = require_once('config.php');

$db = new Database($config['database']);

$title = 'My Notes';

$notes = $db->query('select * from notes where user_id = 1')->get();

 require "views/notes.view.php";

?>
