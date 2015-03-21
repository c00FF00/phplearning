<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        #galery {
            width: 500px;
            height: 200px;
            margin: 0px auto;
        }

        #galery fieldset, legend {
            border: solid 2px brown;
        }

        #galery input[type="text"] {
            border: solid 2px #cccccc;
        }

        #galery input[type="text"]:hover {
            border: solid 2px blueviolet;
        }

        #galery input[type="text"]:focus {
            border: solid 2px blueviolet;
        }
    </style>

</head>
<body>

<div id="galery">
    <form action="handler.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Галерея</legend>
            <table>
                <tr>
                    <td><input type="text" name="dir" size="30" value=""></td>
                    <td>Введите путь к папке с изображениями</td>
                </tr>
                <tr>
                    <td><input type="file" name="imagefile" size="30" value=""></td>
                    <td>Добавить файл</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Выгрузить">&nbsp;&nbsp;<input type="reset" value="Сброс"></td>
                    <td></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>






</body>
</html>