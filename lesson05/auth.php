<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Auth</title>
</head>
<?php
$err = ['Нет такого пользователя.', 'Пароль не верен.'];
$users = ['Петр' => '112233', 'Мария' => '334455'];

//Проверим есть ли данный пользователь вообще.
$id = $_POST['id'];
$pswdform = $_POST['password'];

if (!array_key_exists($id, $users)) {
    echo $err[0];
//    header('Location:index.html');
}

if ($pswdform == $users[$id]) {
    header('Location:authusers.html');
} else {
    echo $err[1];
}



?>