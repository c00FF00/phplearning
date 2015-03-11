<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>

<!-- **********************************************************************  -->
<h3>1. Вывести числа от 1 до 100 нацело делящиеся на 3.</h3>

<?php $number = 1;
echo "<p>";
while ($number <= 100) {
    if (0 == $number % 3) {
        echo $number;
        echo "<br>";
    }
    $number++;
}
echo "</p>"; ?>


<!-- **********************************************************************  -->

<h3>2. Генерация случайных чисел, запись в массив, сортировка и вывод в обратном порядке.</h3>

<?php function randomarray($maxnumbers)
{
    $arr = [];
    $count = $maxnumbers;
    while ($count > 0) {
        $arr[] = (rand(0, $maxnumbers));
        $count--;
    }
    rsort($arr);
    foreach ($arr as $arrsort) {
        echo $arrsort;
        echo "<br>";
    }
}

?>

<?php randomarray(30); ?>

<!-- **********************************************************************  -->

<?php

$geo = [
    'mo' => ['Троицк', 'Подольск', 'Люберцы', 'Одинцово', 'Мытищи'],
    'kalugskaya' => ['Обнинск', 'Малоярославец', 'Детчино', 'Воротынск'],
    'irkutsk' => ['Ангарск', 'Усолье-Сибирское', 'Черемхово', 'Саянск'],
    'tomsk' => ['Северск', 'Мельниково', 'Кривошенио', 'Молчаново'],
];

echo '<h3>Пример с IF</h3>';
foreach ($geo as $oblast => $cityes) {
    echo "<ul>";
    if ("mo" == $oblast) {
        echo "<h4>Московская область</h4>";
    } elseif ("kalugskaya" == $oblast) {
        echo "<h4>Калужская область</h4>";
    } elseif ("irkutsk" == $oblast) {
        echo "<h4>Иркутская область</h4>";
    } elseif ("tomsk" == $oblast) {
        echo "<h4>Томская область</h4>";
    }
    foreach ($cityes as $city) {
        echo "<li>";
        echo $city;
        echo "</li>";
    }
    echo "</ul>";
}



echo ' <h3>Пример с SWITCH</h3>';
foreach ($geo as $oblast => $cityes) {
    echo "<ul>";
    switch ($oblast) {
        case "mo":
            echo '<h4>Московская область</h4>';
        case "kalugskaya":
            echo '<h4>Калужская область</h4>';
        case "irkutsk":
            echo '<h4>Иркутская область</h4>';
        case "tomsk":
            echo '<h4>Томская область</h4>';
    }
    foreach ($cityes as $city) {
    echo "<li>";
    echo $city;
    echo "</li>";
}
echo "</ul>";
}

?>


</body>

</html>