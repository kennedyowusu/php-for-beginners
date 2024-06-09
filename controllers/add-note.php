<?php

require_once ('Validator.php');

$config = require_once ('config.php');
$db = new Database($config['database']);

$title = 'Add New Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $body = $_POST['body'];

  $errors = Validator::validate([
    'title' => $title,
    'body' => $body,
  ], 3, 255);

  if (empty($errors)) {
    $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', [
      'title' => $title,
      'body' => $body,
      'user_id' =>  1,
    ]);

    Validator::redirect('/php/notes');
  } else {
    require_once ('views/add-note.view.php');
    exit();
  }

}

require_once ('views/add-note.view.php');

?>
