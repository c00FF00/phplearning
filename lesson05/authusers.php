<?php
session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Те кто прошел.</title>
    <style>
        input {
            border: solid 3px transparent;
        }
        input:hover {
            border: solid 3px red;
        }
        input:focus {
            border: solid 3px greenyellow;
        }
    </style>
</head>
<body>

<?php if (!empty($_COOKIE['authuser'])) {
} else {
    header('Location:notenter.html');
}
?>
<h3>Страница для аутифицированных пользователей</h3>

<h4>Привет&nbsp;<?php echo $_COOKIE['authuser']; ?></h4>

<?php $_SESSION['loginuser'] = $_COOKIE['authuser'];
echo 'ЛОГИНЮЗЕР<br>';
var_dump($_SESSION['loginuser']);
echo '<br>';?>

<?php echo 'Сессия для ';
var_dump($_SESSION['login']); ?>

<?php echo 'Noauth cookie ';
var_dump($_COOKIE['noauthuser']); ?>

<p>Сессия началась в &nbsp;</p> <span> <?php echo date('Y-m-d'); ?> </span>


<form action="auth.php" method="post">
    <input type="submit" value="Выход" name="logout">
</form>


</body>
</html>