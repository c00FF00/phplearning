<?php

$imgfile = $_FILES['imagefile']['name'];

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

//Получим массив с путями изображенияий.
function letGetImg($dir)
{
    $images = [];
    if (is_dir($dir)) {
        if ($folder = opendir($dir)) {
            while (($file = readdir($folder)) !== false) {
                if (isItImage($file)) {
//                    $images[] = $dir . $file;

                }
                //echo "filename: $file : filetype: " . filetype($dir . $file) . "<br>";
            }
            closedir($folder);
        }
    }
    return $images;
}


//Прием файла-картинки из формы.
function GetImageFromForm($uploadDir, $imgfile) {
        $newName = $uploadDir . basename($_FILES['imagefile']['name']);
        if (is_uploaded_file($_FILES['imagefile']['tmp_name'])) {
            $res = move_uploaded_file ($_FILES['imagefile']['tmp_name'], $newName);
        }
echo 'RES   ',$res;
    //if ($res) {...} else {...}
}


if (isItImage($imgfile)) {
    GetImageFromForm('/var/www/html/lesson06/img/', $imgfile);
    header('Location: index.html');
} else { echo 'Ne smogla' ; }

//$newName = $uploadDir . basename($_FILES['image']['name']);
//if (is_uploaded_file($_FILES['image'']['tmp_name'])) {
//    $res = move_uploaded_file(
//        $_FILES['image']['tmp_name'],
//$newName
//);
//if ($res) {...} else {...}
//}




$ddir = scandir('img');

foreach($ddir as $picture) {
    echo '<br>';
    if (isItImage($picture)) {
        echo $picture;
    }
}



echo '<br>';
var_dump(isItImage($imgfile));

echo '<br>';
var_dump(letGetImg($_POST['dir']));


?>