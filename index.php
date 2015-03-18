<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lesson01</title>
    <style>
        table {
            width: 900px;
            border-collapse: collapse;
        }

        th {
            width: 300px;
            border: 1px solid black;
        }

        td {
            width: 300px;
            text-align: center;
            border: 1px solid black;
        }
        .colorr {
            color: blue;
        }

    </style>
</head>

<body>

<ol>ДОМАШНЕЕ ЗАДАНИЕ J

    <li>C помощью оператора echo выведите в браузер переменные разных типов - целого, с плавающей запятой, строкового,
        логического. Точно также поступите с константами разных типов. Внимательно изучите результат.
    </li>
    <li>Повторите вывод, но теперь заключите переменные и константы в двойные кавычки (например так - echo "$a";).
        Объясните результат, используя руководство по языку.
    </li>
    <li>А теперь - одинарные кавычки (например echo '$a';). И снова объясните результат.</li>
    <li>Попробуйте в выражении использовать разные типы данных, например, сложите число 10 и строку "20 приветов".
        Сделайте не менее трех таких примеров. Объясните результат.
    </li>
    <li>Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает значение true, в каких – false?
        Для этого напишите скрипт, который выводит значения операций со всеми возможными вариантами операндов (4
        варианта). Чему равно $a xor $a для любых значений $a?
    </li>
</ol>

    
<h3>Исходные данные</h3>
    
<pre>
define("CONSTA", 5);
define("CONSTB", 2.0);
define("CONSTC", "Какая то строка");
define("CONSTD", 'false');
$a = 5;
$b = 2.0;
$c = "Какая то строка";
$e = "20цифр";
$f = "Цифр20";
$g = "Ц20ифр";
$d = false;
$i = 0;
</pre>    

<?php
define("CONSTA", 5);
define("CONSTB", 2.0);
define("CONSTC", "Какая то строка");
define("CONSTD", 'false');
$a = 5;
$b = 2.0;
$c = "Какая то строка";
$e = "20цифр";
$f = "Цифр20";
$g = "Ц20ифр";
$d = false; ?>
  
<h3>РЕЗУЛЬТАТЫ</h3>

<table>
    <th>Тип данных</th>
    <th>ECHO</th>
    <th>var_damp</th>
    <tr>
        <td class="colorr" colspan="3">Пункт 1 (Переменные и константы без кавычек)</td>
    </tr>
    <tr>
        <td>ЦЕЛОЧИСЛЕННЫЙ</td>
        <td><?php echo $a; ?></td>
        <td><?php var_dump($a); ?></td>
    </tr>
    <tr>
        <td>С ПЛАВАЮЩЕЙ ЗАПЯТОЙ</td>
        <td><?php echo $b; ?></td>
        <td><?php var_dump($b); ?></td>
    </tr>
    <tr>
        <td>СТРОКОВЫЙ ТИП</td>
        <td><?php echo $c; ?></td>
        <td><?php var_dump($c); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКИЙ ТИП</td>
        <td><?php echo $d; ?></td>
        <td><?php var_dump($d); ?></td>
    </tr>

    <tr>
        <td>ЦЕЛОЧИСЛЕННАЯ КОНСТАНТА - CONSTA</td>
        <td><?php echo CONSTA; ?></td>
        <td><?php var_dump(CONSTA); ?></td>
    </tr>

    <tr>
        <td>С ПЛАВАЮЩЕЙ ЗАПЯТОЙ - CONSTB</td>
        <td><?php echo CONSTB; ?></td>
        <td><?php var_dump(CONSTB); ?></td>
    </tr>

    <tr>
        <td>СТРОКА - CONSTC</td>
        <td><?php echo CONSTC; ?></td>
        <td><?php var_dump(CONSTC); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКОГО ТИПА - CONSTD</td>
        <td><?php echo CONSTD; ?></td>
        <td><?php var_dump(CONSTD); ?></td>
    </tr>
    <tr>
        <td class="colorr" colspan="3">Пункт 2 (Переменныe и константы в кавычках "")</td>
    </tr>
    <tr>
        <td>ЦЕЛОЧИСЛЕННЫЙ ТИП</td>
        <td><?php echo "$a"; ?></td>
        <td><?php var_dump("$a"); ?></td>
    </tr>
    <tr>
        <td>С ПЛАВАЮЩЕЙ ЗАПЯТОЙ</td>
        <td><?php echo "$b"; ?></td>
        <td><?php var_dump("$b"); ?></td>
    </tr>
    <tr>
        <td>СТРОКОВЫЙ ТИП</td>
        <td><?php echo "$c"; ?></td>
        <td><?php var_dump("$c"); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКИЙ ТИП</td>
        <td><?php echo "$d"; ?></td>
        <td><?php var_dump("$d"); ?></td>
    </tr>
    <tr>
        <td>ЦЕЛОЧИСЛЕННАЯ КОНСТАНТА - CONSTA</td>
        <td><?php echo "CONSTA"; ?></td>
        <td><?php var_dump("CONSTA"); ?></td>
    </tr>
    <tr>
        <td>С ПЛАВАЮЩЕЙ ЗАПЯТОЙ - CONSTB</td>
        <td><?php echo "CONSTB"; ?></td>
        <td><?php var_dump("CONSTB"); ?></td>
    </tr>
    <tr>
        <td>СТРОКА - CONSTC</td>
        <td><?php echo "CONSTC"; ?></td>
        <td><?php var_dump("CONSTC"); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКОГО ТИПА - CONSTD</td>
        <td><?php echo "CONSTD"; ?></td>
        <td><?php var_dump("CONSTD"); ?></td>
    </tr>
    <tr>
        <td class="colorr" colspan="3">Пункт 3 (Переменные и константы в кавычках '')</td>
    </tr>
    <tr>
        <td>ЦЕЛОЧИСЛЕННЫЙ</td>
        <td><?php echo '$a'; ?></td>
        <td><?php var_dump('$a'); ?></td>
    </tr>
    <tr>
        <td>С ПЛАВАЮЩЕЙ ЗАПЯТОЙ</td>
        <td><?php echo '$b'; ?></td>
        <td><?php var_dump('$b'); ?></td>
    </tr>
    <tr>
        <td>СТРОКОВЫЙ ТИП</td>
        <td><?php echo '$c'; ?></td>
        <td><?php var_dump('$c'); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКИЙ ТИП</td>
        <td><?php echo '$d'; ?></td>
        <td><?php var_dump('$d'); ?></td>
    </tr>
    <tr>
        <td>КОНСТАНТА - CONSTA</td>
        <td><?php echo 'CONSTA'; ?></td>
        <td><?php var_dump('CONSTA'); ?></td>
    </tr>
    <tr>
        <td>ПЛАВАЮЩЕЙ ЗАПЯТОЙ - CONSTB</td>
        <td><?php echo 'CONSTB'; ?></td>
        <td><?php var_dump('CONSTB'); ?></td>
    </tr>
    <tr>
        <td>СТРОКА - CONSTC</td>
        <td><?php echo 'CONSTC'; ?></td>
        <td><?php var_dump('CONSTC'); ?></td>
    </tr>
    <tr>
        <td>ЛОГИЧЕСКОГО ТИПА - CONSTD</td>
        <td><?php echo 'CONSTD'; ?></td>
        <td><?php var_dump('CONSTD'); ?></td>
    </tr>
    <tr>
        <td class="colorr" colspan="3">Пункт 4 Сложение - переменные и константы разных типов</td>
    </tr>
    <tr>
        <td>целое и число с плавающей запятой</td>
        <td><?php echo($a + $b); ?></td>
        <td><?php var_dump($a + $b); ?></td>
    </tr>

    <tr>
        <td>целое и строку</td>
        <td><?php echo($a + $c); ?></td>
        <td><?php var_dump($a + $c); ?></td>
    </tr>
    <tr>
        <td>число с плавающей запятой и строку</td>
        <td><?php echo($b + $c); ?></td>
        <td><?php var_dump($b + $c); ?></td>
    </tr>
    <tr>
        <td>строку и строку</td>
        <td><?php echo($c + $c); ?></td>
        <td><?php var_dump($c + $c); ?></td>
    </tr>
    <tr>
        <td>число и булево</td>
        <td><?php echo($a + $d); ?></td>
        <td><?php var_dump($a + $d); ?></td>
    </tr>
    <tr>
        <td>константу целого и строки</td>
        <td><?php echo(CONSTA + CONSTC); ?> </td>
        <td><?php var_dump(CONSTA + CONSTC); ?></td>
    </tr>
    <tr>
        <td>константы строки и строки</td>
        <td><?php echo(CONSTC + CONSTC); ?> </td>
        <td><?php var_dump(CONSTAC + CONSTC); ?></td>
    </tr>
    <tr>
        <td>число и строку с цифрами в начале</td>
        <td><?php echo($a + $e); ?></td>
        <td><?php var_dump($a + $e); ?></td>
    </tr>

    <tr>
        <td>число и строку с цифрами в середине</td>
        <td><?php echo($a + $f); ?></td>
        <td><?php var_dump($a + $f); ?></td>
    </tr>

    <tr>
        <td>число и строку с цифрами в конце</td>
        <td><?php echo ($a + $g); ?></td>
        <td><?php var_dump($a + $g); ?></td>
    </tr>
    <tr>
        <td>строка с цифрой в начале и такая же строка</td>
        <td><?php echo ($f + $f); ?></td>
        <td><?php var_dump($f + $f); ?></td>
    </tr>
    <tr>
        <td class="colorr" colspan="3">Пункт 5 (Хорь)</td>
    </tr>
    <tr>
        <td>$a xor $a</td>
        <td><?php echo ($a xor $a); ?></td>
        <td><?php var_dump($a xor $a); ?></td>
    </tr>
    <tr>
        <td>$a xor $b</td>
        <td><?php echo ($a xor $b); ?></td>
        <td><?php var_dump($a xor $b); ?></td>
    </tr>
    <tr>
        <td>$a xor $c</td>
        <td><?php echo ($a xor $c); ?></td>
        <td><?php var_dump($a xor $c); ?></td>
    </tr>
    <tr>
        <td>$c xor $d</td>
        <td><?php echo ($c xor $d); ?></td>
        <td><?php var_dump($c xor $d); ?></td>
    </tr>
    <tr>
        <td>$i xor $i</td>
        <td><?php echo ($i xor $i); ?></td>
        <td><?php var_dump($i xor $i); ?></td>
    </tr>
    
    
    
    
    <br><br><br><br><br><br><br><br><br>

</table>

<h3>Выводы</h3>

    <p>По пункту 2. В таблице явно видно, что при выводе переменной типа int или float в двойных кавычках выводится значение этой переменной и это значение приводится к типу string. А константы обрабатываются как набор символов.</p>

    <p>По пункту 3. При обрамлении констант и переменных в одинарные кавычки вывод обрабатывается  как набор символов. Тип выводимого содержимого имеет тип string.</p>

    <p>По пункту 4. Операции сложения возвращают тип int или float вне зависимости от типов операндов.</p>




</body>

</html>