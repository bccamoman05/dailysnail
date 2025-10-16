<?php

$errors = [];

if (!empty($_POST)) {
  $uname = $_POST['uname'];
  $subject = $_POST['subject'];
  if (empty($uname)) {
      $errors[] = "Username is empty";
  }
  if (empty($subject)) {
      $errors[] = 'Subject is empty';
  }
    if (empty($errors)) {
        // send email
        $to = 'submissions@dailysnail.org';
        $headers = 'From: $uname';
        mail($to, $subject, '', $headers);
    }
}