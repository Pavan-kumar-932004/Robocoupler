<?php
$userIP = $_SERVER['REMOTE_ADDR'];

$jsonData = file_get_contents('../Database/users.json');
$users = json_decode($jsonData, true);

$userFound = false;
foreach ($users as &$user) {
  if ($user['ip_address'] === $userIP) {
    $userFound = true;
    $user['status'] = 0;
    break;
  }
}

if ($userFound) {
  $jsonData = json_encode($users, JSON_PRETTY_PRINT);
  file_put_contents('../Database/users.json', $jsonData);
  echo 'success';
} else {
  echo 'error';
}
?>
