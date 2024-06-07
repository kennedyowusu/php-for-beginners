<?php

require_once('functions/functions.php');

require_once('router.php');

require_once('Database.php');

$config = require_once('config.php');

$db = new Database($config['database']);

$queryStatement = $db->query('SELECT * FROM posts')->fetchAll();
