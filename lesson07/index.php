<?php session_start();
$_SESSION['msg'] = 'Галерея ждет новых изображений.';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        #main {
            width: 400px;
            height: 206px;
            float: left;
            border: solid 3px #cccccc;
            margin: 5px;
            padding: 1px;
        }

        #main div.picture {
            float: left;
            border: solid 3px transparent;
        }

        #main div.picture:hover {
            border-top: solid 3px darkcyan;

        }

        #main div.subj {
            font-size: 10pt;
            padding-left: 30px;
        }


    </style>
</head>

<body>
<h2>Галерея изображений</h2>
<a href="getimage.php">Перейти к форме добавления изображений.</a>
<br>
<hr>
<br>

<?php

mysql_connect('localhost', 'root', '123456');
mysql_select_db('gallery');

$query = 'select * from picture';
$getall = mysql_query($query);
$dir = __DIR__;

?>

<?php while (false !== ($row = mysql_fetch_array($getall))) {
    $ssize = getimagesize($dir . $row['pathofimage'] . $row['nameofpicture']);?>

    <div id="main">
        <div class="picture"><a href= <?php echo $row['pathofimage'] . $row['nameofpicture']; ?>  target="_blank"><img
                    src=<?php echo $row['pathofimage'] . $row['nameofpicture']; ?> alt="Отсутствует" width="200px"
                    height="200px"></a></div>
        <div class="subj">
            <p><?php echo $row['pname']; ?></p>
            <p><?php echo 'Дата:   ', $row['dateforplace']; ?></p>
            <p><?php echo 'Комментарий:     ', $row['comment']; ?></p>
            <p><?php echo 'Размер:          ', round($row['size'] / 1048576, 2), ' Mb'; ?></p>
            <p><?php echo 'Размер в px: ', $ssize['0'],'x',$ssize['1'] ; ?></p>
        </div>
    </div>

<?php } ?>


</body>
</html>