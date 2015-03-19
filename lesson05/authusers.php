<?php
$expire = time() + 60;
setcookie('authuser', $expire);
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Страница1</title>
</head>
<body>
<h1>Страница для аутифицированных пользователей</h1>

<?php echo $_COOKIE['id']; ?>


</body>
</html>