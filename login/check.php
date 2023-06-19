<?php
$userIP = $_SERVER['REMOTE_ADDR'];

$jsonData = file_get_contents('../Database/users.json');
$users = json_decode($jsonData, true);

$userFound = false;
foreach ($users as $user) {
    if ($user['ip_address'] === $userIP) {
        $userFound = true;
        if ($user['status'] === 0) {
            echo 'redirect';
        } else {
            echo 'success';
        }
        break;
    }
}

if (!$userFound) {
    echo 'redirect';
}
?>
