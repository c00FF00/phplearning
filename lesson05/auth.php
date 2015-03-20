<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Auth</title>
</head>
<?php


$msg = ['Нет такого пользователя.', 'Пароль не верен.', 'Вы не прошли авторизацию', 'Это сессия > ', 'Нажал на выход.'];
$users = ['Петр' => '112233', 'Мария' => '334455', 'Djon' => '111'];
$expire = time() + 300;
$cookEnd = time() - 300;

$id = $_POST['id'];
$pswdform = $_POST['password'];
$logout = $_POST['logout'];





if ($_POST['logout']) {
    echo $msg[4];
    setcookie('authuser', $id, $cookEnd);
    setcookie('noauthuser', 'baduser', $cookEnd);
    session_destroy();
    header('Location:index.php');
}

if (!array_key_exists($id, $users)) {
    header('Location:index.php');
    echo $msg[0];
}  elseif ($pswdform == $users[$id]) {
    setcookie('authuser', $id, $expire);
    $_SESSION['login'] = $id;
    header('Location:authusers.php');
} else {
    setcookie('noauthuser', 'baduser', $expire);
    echo $msg[2];
}
?>