<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <style>
        #calc {
            margin: 0px auto;
            width: 450px;
        }

        #calc div {
            width: 350px;
            height: 20px;
            border: solid 1px black;
            margin: 5px;
            text-align: right;
            background-color: antiquewhite;
            color: red;
        }

        fieldset, legend {
            border: solid 2px brown;
            background-color: orange;
        }
    </style>
</head>
<body>

<?php

function testdigit($anydata)
{
    if (preg_match("/^-\d+\.\d+$|^\d+\.\d+$|^-\d+$|^\d+$/", $anydata)) {
        return true;
    } else {
        return false;
    }

}


function calculator($firstnm, $secondnm, $act)
{
    //Сделаем шаблон для целых, дробных, положительных и отрицательных чисел.
    //$pattern = "/^-[0-9]+\.[0-9]+$|^[0-9]+\.[0-9]+$|^-[0-9]+$|^[0-9]+$/";
    //Проверим - число ли... Ну а что, ну а вдруг...
//    if (!preg_match($pattern, $firstnm)) {
//        return ('ERROR. Only numbers.');
//        exit;
//    }
//    if (!preg_match($pattern, $secondnm)) {
//        return ('ERROR. Only numbers.');
//        exit;
//    }
    //Выберем действие и сделаем с действием действие...))
    switch ($act) {
        case("+"):
            return ($firstnm + $secondnm);
            break;
        case("-"):
            return ($firstnm - $secondnm);
            break;
        case("*"):
            return ($firstnm * $secondnm);
            break;
        case("/"):
            return ($firstnm / $secondnm);
            break;
        default:
            return 'Действие не выбрано';
            break;
    }
}

//Вычислим результат и отдадим суперглобальной переменной.
//calculator($_POST['firstnumber'],$_POST['secondnumber'],$_POST['action']);

$result = calculator($_POST['firstnumber'], $_POST['secondnumber'], $_POST['action']);

?>




<!--Собственно, а вот и html.-->
<!--Для наглядности работы проверки ввода чисел-->
<!--поле первого числа имеет тип "text".-->
<!--Да и браузер при типе "number" не даст ввести не цифровые символы.-->

<div id="calc">
    <form action="index.php" method="post">
        <fieldset>
            <legend>
                Калькулятор
            </legend>
            <div><?php echo $result; ?></div>
            <input type="text" size="10" name="firstnumber">
            <select name="action">
                <option selected=""></option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="secondnumber" step="any">
            <input type="submit" value="=">
        </fieldset>
    </form>
</div>


</body>
</html>
