<?php
session_start();
$_SESSION['msg'] = 'Галерея ждет новый файл';
$imgfile = $_FILES['imagefile']['name'];

//Узнаем расширение.
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
function GetImageFromForm($uploadDir, $imgfile)
{
    $newName = $uploadDir . basename($_FILES['imagefile']['name']);
    if (is_uploaded_file($_FILES['imagefile']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['imagefile']['tmp_name'], $newName);
    }
    return $res;
//echo 'RES   ',$res;
    //if ($res) {...} else {...}
}


if (isItImage($imgfile)) {
    if (GetImageFromForm('/var/www/html/lesson06/img/', $imgfile)) {
        header('Location: picture.php');
    } else {
        $_SESSION['msg'] = 'Сервер не смог принять файл.';
        header('Location: index.php');
    }
} else {
    $_SESSION['msg'] = 'Галерея не поддерживает этот формат' ;
    header('Location: index.php');
};

?>