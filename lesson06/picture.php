<?php session_start();
$_SESSION['msg'] = 'Галерея ждет новых изображений.';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        #main {
            margin: 0px auto;
        }

        #main div {
            width: 200px;
            height: 200px;
            float: left;
            border: solid 3px blue;
            margin: 5px;
        }

        #main div:hover {
            border: solid 3px red;
        }

    </style>
</head>

<?php

//Это хабр помог. Узнаем расширение.
function letGetExtension($filename)
{
    return end(explode(".", $filename));
}

//А изображение ли?
function isItImage($anydata)
{
    $itsImage = ['jpg', 'jpeg', 'png', 'gif'];
    $exten = letGetExtension($anydata);
    return (in_array($exten, $itsImage));
}

?>

<body>
<h2>Галерея изображений</h2>
<a href="index.php">Перейти к форме добавления изображений.</a>
<br>
<hr>
<br>

<div id="main">
    <?php $ddir = scandir('img');
    foreach ($ddir as $picture) { ?>
        <?php if (isItImage($picture)) { ?>
            <div><img src=<?php echo 'img/' . $picture; ?> alt="Картинка" width="200px" height="200px"></div><?php } ?>
    <?php }
    ?>
</div>


</body>
</html>