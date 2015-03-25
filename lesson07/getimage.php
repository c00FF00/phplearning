<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        #galery {
            width: 400px;
            height: 200px;
            margin: 0px auto;
            padding: 20px;
        }

        #galery fieldset, legend {
            border: solid 2px brown;
        }

        /*#galery input[type="file"] {*/
        /*border: solid 2px #cccccc;*/
        /*}*/

        /*#galery input[type="file"]:hover {*/
        /*border: solid 2px blueviolet;*/
        /*}*/

        /*#galery input[type="file"]:focus {*/
        /*border: solid 2px blueviolet;*/
        /*}*/

        .msg {
            color: darkmagenta;
        }

        #galery div {
            margin-top: 10px;
        }

        p {
            font-size: 12px;
            color: darkblue;
        }
    </style>
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
                <input type="file" name="imagefile">
            </div>
            <div>
                <textarea id="subject" name="subject" cols="50" rows="4" maxlength="200"
                          placeholder="Введите здесь описание картинки..."></textarea>
            </div>
            <div>
                <input type="submit" value="Выгрузить">
            </div>
            <div>
                <a href="index.php">Перейти в галерею</a>
            </div>
        </fieldset>
    </form>
</div>

</body>
</html>