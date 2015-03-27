<?php

function isItImage($fileName) {
    $itsImage = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    $mime = getimagesize($fileName)['mime'];
    return (in_array($mime, $itsImage));
}




?>