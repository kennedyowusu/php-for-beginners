<?php

$title = 'Add New Note';

$config = require_once ('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $body = $_POST['body'];

  if (empty($title) || empty($body)) {
    $error = 'Please fill in all fields.';
  } else {
    // $query = $pdo->prepare('INSERT INTO notes (title, body,  user_id) VALUES (:title, :body, :user_id)');
    // $query->bindParam('title', $title);
    // $query->bindParam('body', $body);
    // $query->bindParam('user_id', $_SESSION['user_id']);
    // $query->execute();

    // header('Location: /php/notes');

    $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', array(':title' => $title, ':body' => $body,
    ':user_id' => 2));
  }
}

require_once ('views/add-note.view.php');

?>
