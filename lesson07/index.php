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

        #main div.picture {
            width: 200px;
            height: 300px;
            float: left;
            border: solid 3px transparent;
            margin: 5px;
            padding: 3px;
        }

        #main div.picture:hover {
            border-top: solid 3px darkcyan;
        }

        #main div.subj {
            width: 200px;
            height: 100px;
            font-size: 10pt;

            padding: 5px;
        }

        p {
            width: 200px;
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

function aboutPictureR($file)
{
    return file_get_contents($file);
}

function Comment($file)
{
    if ($subj = aboutPictureR($file . '.txt')) {
        echo $subj;
    } else {
        echo 'Без описания';
    }
}

?>

<body>
<h2>Галерея изображений</h2>
<a href="getimage.php">Перейти к форме добавления изображений.</a>
<br>
<hr>
<br>

<div id="main">
    <?php $ddir = scandir('img');
    foreach ($ddir as $picture) { ?>
        <?php if (isItImage($picture)) {
            echo "\n"; ?>
            <div class="picture"><a href= <?php echo 'img/' . $picture; ?>  target="_blank"><img
                    src=<?php echo 'img/' . $picture; ?> alt="Картинка" width="200px" height="200px"></a>

            <div id="subj" class="subj"><p><?php Comment('/var/www/html/subj/' . $picture); ?></p></div></div><?php } ?>
    <?php }
    ?>
</div>


</body>
</html>