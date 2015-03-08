<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>lesson02</title>
</head>
<body>

<h3>Задание 1. Число Фибоначчи.</h3>


<?php

function fibo($z)
{
    if ('integer' !== gettype($z)) {
        echo 'Для этого значения операция не выполнима. Значение должно быть целым числом.';
        return;
    }
    if ($z <= 0) {
        echo 'Число должно быть положительным и не ноль.';
        return;
    }
    if ($z > 30) {
        echo 'Это число слишком тяжело для этого ноутбука.';
        return;
    }

    if ($z <= 2) {
        return 1;
    } else {
        return fibo($z - 1) + fibo($z - 2);
    }

}

echo 'Число Фибоначчи для значения 5.3:   ', fibo(5.3);
echo 'Число Фибоначчи для значения строки "aad":   ', fibo('aad');
echo 'Число Фибоначчи для значения -1:   ', fibo(-1);
echo 'Число Фибоначчи для значения 32:   ', fibo(32);
echo 'Число Фибоначчи для значения 25:   ', fibo(25);

?>

<br>

<?php
function advanceddate($day, $month)
{
    switch ($month) {
        case 1:
            echo $day, ' января';
            break;
        case 2:
            echo $day, ' февраля';
            break;
        case 3:
            echo $day, ' марта';
            break;
        case 4:
            echo $day, ' апреля';
            break;
        case 5:
            echo $day, ' мая';
            break;
        case 6:
            echo $day, ' июня';
            break;
        case 7:
            echo $day, ' июля';
            break;
        case 8:
            echo $day, ' августа';
            break;
        case 9:
            echo $day, ' сентября';
            break;
        case 10:
            echo $day, ' октября';
            break;
        case 11:
            echo $day, ' ноября';
            break;
        case 12:
            echo $day, ' декабря';
            break;

    }

}

echo 'Дата: ', advanceddate(1, 9);


?>


<br>

<?php
function procentpovkladu($sum, $month, $procentyear)
{

    //Вычислим количество процентов за месяц
    $m = ($procentyear / 12) * $month;
    //Доход 
    $profit = $sum * $m / 100;

    return ($sum + $profit);
}

echo 'Сумма вклада:  ', procentpovkladu(10000, 12, 12);

?>


</body>
</html>







