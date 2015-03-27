<?php

function isItImage($fileName) {
    $itsImage = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
    $mime = getimagesize($fileName)['mime'];
    return (in_array($mime, $itsImage));
}


var_dump($mime);

var_dump(isItImage('img/Mono_Lake_by_Angela_Henderson.jpg'));


?>