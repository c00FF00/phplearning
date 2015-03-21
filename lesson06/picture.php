<!DOCTYPE html>
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
            border: solid 3px green;
        }

    </style>
</head>
<body>
<h2>Галерея изображений</h2>
<a href="index.php">Перейти к форме добавления изображений.</a>
<br><br>


<div id="main">

    <?php $ddir = scandir('img');

    foreach($ddir as $picture) { ?>
        <div><img src=<?php echo 'img/' . $picture; ?> alt="Картинка 1" width="200px" height="200px"></div>
    <?php  }
?>


</div>


</body>
</html>