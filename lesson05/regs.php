<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Главная</title>
    <style>
        #regform {
            width: 300px;
            height: 200px;
            margin: 0px auto;
        }

        #regform fieldset, legend {
            border: solid 2px brown;
        }

        #regform input[type="text"] {
            border: solid 2px #cccccc;
        }

        #regform input[type="text"]:hover {
            border: solid 2px blueviolet;
        }

        #regform input[type="text"]:focus {
            border: solid 2px blueviolet;
        }
    </style>

</head>
<body>

<?php echo __DIR__ ;?>


<!---->
<?php //include 'lesson05/funct.php'; ?>
<?php //echo msg()['notuser']; ?>
<!---->
<div id="regform">
    <form action="auth.php" method="post">
        <fieldset>
            <legend>Авторизация</legend>
            <table>
                <tr>
                    <td><input type="text" name="id" size="30" value=""></td>
                    <td>Имя</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" size="30" value=""></td>
                    <td>Пароль</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Войти">&nbsp;&nbsp;<input type="reset" value="Сброс"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>