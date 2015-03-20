<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Страница1</title>
</head>
<body>

<?php if (!empty($_COOKIE['authuser'])) {
} else {
    header('Location:notenter.html');
}
?>
<h3>Страница для аутифицированных пользователей</h3>

<h4>Привет&nbsp;<?php echo $_COOKIE['authuser']; ?></h4>

<?php echo 'Сессия для ';
var_dump($_SESSION['login']); ?>

<?php echo 'Noauth cookie ';
var_dump($_COOKIE['noauthuser']); ?>


<form action="auth.php" method="post">
    <input type="submit" value="Выход" name="logout">
</form>


</body>
</html>