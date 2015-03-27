<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Форма ввода</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>

<div id="galery">
    <form action="handler.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Галерея</legend>

            <div class="msg">
                <?php echo $_SESSION['msg']; ?>
            </div>
            <div>
                <textarea name="pname" cols="30" rows="1" maxlength="30"
                          placeholder="Введите здесь название картинки..."></textarea>
            </div>
            <div>
                <input type="file" name="imagefile">
            </div>
            <div>
                <textarea id="subject" name="subject" cols="50" rows="4" maxlength="100"
                          placeholder="Введите здесь описание картинки..."></textarea>
            </div>
            <div>
                <input type="submit" value="Выгрузить">&nbsp;&nbsp;<input type="reset" value="Очистить форму">
            </div>
            <div>
                <a href="index.php">Перейти в галерею</a>
            </div>
        </fieldset>
    </form>
</div>

</body>
</html>