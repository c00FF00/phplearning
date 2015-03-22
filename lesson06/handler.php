<?php
session_start();
$_SESSION['msg'] = 'Галерея ждет новых изображений';
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

//Прием файла-картинки из формы.
function GetImageFromForm($uploadDir, $imgfile)
{
    $newName = $uploadDir . basename($_FILES['imagefile']['name']);
    if (is_uploaded_file($_FILES['imagefile']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['imagefile']['tmp_name'], $newName);
    }
    return $res;
}

//Попытка размещения картинки в галерее.
if (isItImage($imgfile)) {
    if (GetImageFromForm('/var/www/html/lesson06/img/', $imgfile)) {
        header('Location: picture.php');
    } else {
        $_SESSION['msg'] = 'Сервер не смог принять файл.';
        header('Location: index.php');
    }
} else {
    $_SESSION['msg'] = 'Галерея не поддерживает этот формат';
    header('Location: index.php');
};

?>