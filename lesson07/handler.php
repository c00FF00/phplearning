<?php
session_start();

$_SESSION['msg'] = 'Галерея ждет новых изображений';
$imageName = $_FILES['imagefile']['name'];
$imageSize = 1;
$pathForImage = __DIR__ . '/img/';

var_dump($_FILES);


////Узнаем расширение.
//function letGetExtension($filename)
//{
//    return end(explode(".", $filename));
//}
//
////А изображение ли?
//function isItImage($anydata)
//{
//    $itsImage = ['jpg', 'jpeg', 'png', 'gif'];
//    $exten = letGetExtension($anydata);
//    return (in_array($exten, $itsImage));
//}
//
////Прием файла-картинки из формы.
//function GetImageFromForm($uploadDir)
//{
//    $newName = $uploadDir . basename($_FILES['imagefile']['name']);
//    if (is_uploaded_file($_FILES['imagefile']['tmp_name'])) {
//        $res = move_uploaded_file($_FILES['imagefile']['tmp_name'], $newName);
//    }
//    return $res;
//}
//
////Описание картинки в файл
//function aboutPictureW($file, $text)
//{
//    if ('' != $text) {
//        file_put_contents($file, $text);
//    } else {
//        file_put_contents($file, 'Без описания');
//    }
//}
//
//
//
////Функция попытки размещения картинки в галерее.
//function makeGallery($pathForImage, $pathForSubj, $imgfile)
//{
//    if (isItImage($imgfile)) {
//        if (GetImageFromForm($pathForImage)) {
//            aboutPictureW($pathForSubj . $imgfile . '.txt', $_POST['subject']);
//            header('Location: index.php');
//        } else {
//            $_SESSION['msg'] = 'Сервер не смог принять файл.';
//            header('Location: getimage.php');
//        }
//    } else {
//        $_SESSION['msg'] = 'Галерея не поддерживает этот формат';
//        header('Location: getimage.php');
//    }
//}
//
//makeGallery($pathForImage, $pathForSubj, $imgfile);
//
////----------------------------------------MYSQL--------------------------------------------
//
////$insert = 'INSERT INTO picture (pathofimage,nameofimage,comment) VALUES('/d/e/dddd4', 'Иdddмя', 'dddddddd');';
//
//
//mysql_connect('localhost', 'root', '123456');
//mysql_db_name('gallery');
//mysql_query('INSERT INTO picture (pathofimage,nameofimage,comment) VALUES('/d/e/dddd4', 'Иdddмя', 'dddddddd')');
//function aboutPictureSQL($imgFile, $nameOfPicture, $commentOfPicture) {
//
//}
//
//
//function makeSqlGallery($pathForImage, $imgFile, $nameOfPicture, $commentOfPicture)
//{
//    if (isItImage($imgFile)) {
//        if (GetImageFromForm($pathForImage)) {
//
//            header('Location: index.php');
//        } else {
//            $_SESSION['msg'] = 'Сервер не смог принять файл.';
//            header('Location: getimage.php');
//        }
//    } else {
//        $_SESSION['msg'] = 'Галерея не поддерживает этот формат';
//        header('Location: getimage.php');
//    }
//}
//
//?>