<?php

$title = 'Add New Note';

$config = require_once ('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $body = $_POST['body'];

  $errors = [];

  if (empty($title)) {
    $errors[] = 'Title is required.';
  } else if (strlen($title) < 3) {
    $errors[] = 'Title must be at least 3 characters.';
  } else if (strlen($title) > 255) {
    $errors[] = 'Title must be less than 255 characters.';
  } else if (empty($body)) {
    $errors[] = 'Body is required.';
  } else if (strlen($body) < 3) {
    $errors[] = 'Body must be at least 3 characters.';
  } else if (strlen($body) > 16777215) {
    $errors[] = 'Body must be less than 16777215 characters.';
  } else {
    $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', array(':title' => $title, ':body' => $body,
    ':user_id' => 2));
  }
}

require_once ('views/add-note.view.php');

?>
