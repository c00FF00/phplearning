<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Auth</title>
</head>
<?php
$msg = ['Нет такого пользователя.', 'Пароль не верен.', 'Вы не прошли авторизацию', 'Это сессия > '];
$users = ['Петр' => '112233', 'Мария' => '334455', 'Djon' => '111'];
$expire = time() + 300;
//Проверим есть ли данный пользователь вообще.
$id = $_POST['id'];
$pswdform = $_POST['password'];

if (!array_key_exists($id, $users)) {
    header('Location:index.php');
    echo $msg[0];
} elseif ($pswdform == $users[$id]) {
    setcookie('authuser', $id, $expire);
    $_SESSION['login'] = $id;
    header('Location:authusers.php');
} else {
    setcookie('noauthuser', $expire);
    echo $msg[2];
}
?>