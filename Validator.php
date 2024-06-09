<?php

class Validator
{
  public static function validate($data, $min, $max)
  {
    $errors = [];

    if (empty($data['title'])) {
      $errors[] = 'Title is required.';
    } else if (strlen(
      trim($data['title'])
    ) < $min) {
      $errors[] = 'Title must be at least ' . $min . ' characters.';
    } else if (strlen(trim($data['title'])) > $max) {
      $errors[] = 'Title must be less than ' . $max . ' characters.';
    } else if (empty($data['body'])) {
      $errors[] = 'Body is required.';
    } else if (strlen(
      trim($data['body'])
    ) < $min) {
      $errors[] = 'Body must be at least ' . $min . ' characters.';
    } else if (strlen(trim($data['body'])) > $max) {
      $errors[] = 'Body must be less than ' . $max . ' characters.';
    }

    return $errors;
  }

  public static function redirect($url)
  {
    header('Location: ' . $url);
    exit();
  }
}
