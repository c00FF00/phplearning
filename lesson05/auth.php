<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Auth</title>
</head>
<?php
$err = ['Нет такого пользователя.', 'Пароль не верен.', 'Вы не прошли авторизацию'];
$users = ['Петр' => '112233', 'Мария' => '334455'];

//Проверим есть ли данный пользователь вообще.
$id = $_POST['id'];
$pswdform = $_POST['password'];

if (!array_key_exists($id, $users)) {
    header('Location:indx.php');
    echo $err[0];
} elseif ($pswdform == $users[$id]) {
    header('Location:authusers.php');
} else {
    echo $err[2];
}
?>