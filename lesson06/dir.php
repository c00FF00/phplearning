<?php
var_dump($_POST['imagefile']);
//Это хабр помог. Узнаем расширения.
function letGetExtension($filename)
{
    return end(explode(".", $filename));
}

//А изображение ли?
function isItImage($anydata)
{
    $itsImage = ['jpg', 'jpeg', 'png', 'gif'];
    return (in_array($anydata, $itsImage));
}

//Получим массив с изображениями.
function letGetImg($dir)
{
    $images = [];
    if (is_dir($dir)) {
        if ($folder = opendir($dir)) {
            while (($file = readdir($folder)) !== false) {
                $exten = letGetExtension($file);
                if (isItImage($exten)) {
                    $images[] = $dir . $file;
                }
                //echo "filename: $file : filetype: " . filetype($dir . $file) . "<br>";
            }
            closedir($folder);
        }
    }
    return $images;
}

echo '<br>';
var_dump(letGetImg($_POST['dir']));


?>