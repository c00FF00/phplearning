<?php
$users = ['Петр' => '112233', 'Мария' => '334455'];

//Проверим есть ли данный пользователь вообще.

if (array_key_exists($_POST['id'],$users)) {
    echo 'Существует';
    header('Location:authusers.html');
} else {
    header('Location:index.html');
};


?>