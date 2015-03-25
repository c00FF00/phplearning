<?php
session_start();

$_SESSION['msg'] = 'Галерея ждет новых изображений';

$fileName = $_FILES['imagefile']['name'];
$fileSize = $_FILES['imagefile']['size'];
$fileType = $_FILES['imagefile']['type'];

$shortPath = '/img/';
$fullPath = __DIR__ . $shortPath;

$comment = $_POST['subject'];
$pname = $_POST['pname'];

var_dump($_FILES);


//Узнаем расширение.
function letGetExtension($fileName)
{
    return end(explode(".", $fileName));
}

//А изображение ли?
function isItImage($anydata)
{
    $itsImage = ['jpg', 'jpeg', 'png', 'gif'];
    $exten = letGetExtension($anydata);
    return (in_array($exten, $itsImage));
}

//Загрузки в MySql
function pictureToGallerySQL($shortPath, $fileName, $fileSize, $pname, $comment)
{
    $insert = "INSERT INTO picture (pathofimage, nameofpicture, size, pname, comment) VALUES ('$shortPath', '$fileName', '$fileSize', '$pname', '$comment')";
    $result = mysql_query($insert);
    return $result;
}

//Прием файла-картинки из формы.
function GetImageFromForm($fullPath)
{
    $newName = $fullPath . basename($_FILES['imagefile']['name']);
    if (is_uploaded_file($_FILES['imagefile']['tmp_name'])) {
        $res = move_uploaded_file($_FILES['imagefile']['tmp_name'], $newName);
    }
    return $res;
}

//Функция попытки размещения картинки в галерее.
function makeGallery($fullPath, $shortPath, $fileName, $fileSize, $pname, $comment)
{
    if (isItImage($fileName)) {
        if (GetImageFromForm($fullPath)) {
            if (pictureToGallerySQL($shortPath, $fileName, $fileSize, $pname, $comment)) {
                header('Location: index.php');
            } else {
                $_SESSION['msg'] = 'В галерее такой файл видимо уже есть.';
                header('Location: getimage.php');
            }
        } else {
            $_SESSION['msg'] = 'Сервер не смог принять файл.';
            header('Location: getimage.php');
        }
    } else {
        $_SESSION['msg'] = 'Галерея не поддерживает этот формат';
        header('Location: getimage.php');
    }
}

mysql_connect('localhost', 'root', '123456');
mysql_select_db('gallery');
makeGallery($fullPath, $shortPath, $fileName, $fileSize, $pname, $comment);

?>