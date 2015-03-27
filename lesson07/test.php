<?php

function isItImageMime($fileName) {
    $itsImage = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    $mime = getimagesize($fileName)['mime'];
    return (in_array($mime, $itsImage));
}

function testImageFromDir($dir)
{
    $ddir = scandir(__DIR__ . $dir);
    foreach ($ddir as $picture) {
        if (!isItImageMime(__DIR__ . $dir . $picture)) {
            unlink(__DIR__ . $dir . $picture);
        }
    }
}

testImageFromDir('/img/');




?>