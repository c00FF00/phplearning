<!DOCTYPE html>
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


</body>
</html>