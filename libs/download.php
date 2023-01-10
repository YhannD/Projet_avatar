<?php

  $fileName = 'MyAvatar.svg';
  $avatar = $_POST['avatar'];

  header("Cache-Control: public");
  header("Content-Description: File Transfer");
  header("Content-Type: image/svg+xml");
  header('Content-Disposition: attachment; filename="MyAvatar.svg"');
  header("Content-Type: application/force-download");
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download");

  echo $avatar;
  exit;


