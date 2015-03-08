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
    } elseif ($z <= 0) {
        echo 'Число должно быть положительным и не ноль.';
        return;
    } elseif ($z > 30) {
        echo 'Это число слишком тяжело для этого ноутбука.';
        return;
    } elseif ($z <= 2) {
        return 1;
    } else {
        return fibo($z - 1) + fibo($z - 2);
    }

}

echo 'Число Фибоначчи для значения 5.3:   ', fibo(5.3), "\n";
echo 'Число Фибоначчи для значения строки "aad":   ', fibo('aad'), "\n";
echo 'Число Фибоначчи для значения -1:   ', fibo(-1), "\n";
echo 'Число Фибоначчи для значения 32:   ', fibo(32), "\n";
echo 'Число Фибоначчи для значения 25:   ', fibo(25), "\n";

?>

<br>

<h3>Задание 2. Процент по вкладу.</h3>

<?php
function procentpovkladu($sum, $month, $procentyear)
{

    //Вычислим проценты за месяц
    $m = ($procentyear / 12) * $month;
    //Доход
    $profit = $sum * $m / 100;

    return ($sum + $profit);
}

echo 'Сумма вклада:  ', procentpovkladu(10000, 12, 12);

?>
<br>

<h3>Задание 3. Вывод даты с названием месяца.</h3>
<?php
function advanceddate($day, $month)
{
    if (($day <= 31) and ($day >= 1)) {
        switch ($month) {
            case 1:
                echo $day, ' января';
                break;
            case 2:
                if ($day <= 29) {
                    echo $day, ' февраля';
                    break;
                } else {
                    echo 'ERROR: В феврале не может быть ', $day, ' дней.';
                    break;
                }
            case 3:
                echo $day, ' марта';
                break;
            case 4:
                if ($day <= 30) {
                    echo $day, ' апреля';
                    break;
                } else {
                    echo 'ERROR: В апреле не может быть ', $day, ' день.';
                    break;
                }
            case 5:
                echo $day, ' мая';
                break;
            case 6:
                if ($day <= 30) {
                    echo $day, ' июня';
                    break;
                } else {
                    echo 'ERROR: В июне не может быть ', $day, ' день.';
                    break;
                }
            case 7:
                echo $day, ' июля';
                break;
            case 8:
                echo $day, ' августа';
                break;
            case 9:
                if ($day <= 30) {
                    echo $day, ' сентября';
                    break;
                } else {
                    echo 'ERROR: В сентябре не может быть ', $day, ' день.';
                    break;
                }
            case 10:
                echo $day, ' октября';
                break;
            case 11:
                if ($day <= 30) {
                    echo $day, ' ноября';
                    break;
                } else {
                    echo 'ERROR: В ноябре не может быть ', $day, ' день.';
                    break;
                }
            case 12:
                echo $day, ' декабря';
                break;
        }
    } else {
        echo 'ERROR: Введите дату от 1 до 31.';
        return;
    }
}

echo 'Дата: ', advanceddate(31, 9);


?>


<br>


</body>
</html>







