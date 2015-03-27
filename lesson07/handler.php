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

include __DIR__ . '/lib.php';


//Выгрузка в базу.
mysql_connect('localhost', 'root', '123456');
mysql_select_db('gallery');
makeGallery($fullPath, $shortPath, $fileName, $fileSize, $pname, $comment);

?>