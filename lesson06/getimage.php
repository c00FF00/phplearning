<?php session_start();
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        #galery {
            width: 500px;
            height: 200px;
            margin: 0px auto;
            padding: 20px;
        }

        #galery fieldset, legend {
            border: solid 2px brown;
        }

        #galery input[type="file"] {
            border: solid 2px #cccccc;
        }

        #galery input[type="file"]:hover {
            border: solid 2px blueviolet;
        }

        #galery input[type="file"]:focus {
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
                    <td><?php echo $_SESSION['msg']; ?></td>
                </tr>
                <tr>
                    <td><input type="file" name="imagefile" size="100"</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Выгрузить"></td>
                </tr>
                <tr>
                    <td><a href="index.php">Перейти в галерею</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
</div>


</body>
</html>