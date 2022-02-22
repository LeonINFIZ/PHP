<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Топалов Артём</title>

    <style>
        .textEdit{
            text-align: center;
            font-weight: bold;
        }
    </style>

</head>
<body>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="1">
    Задание 1.
    <br>
    Введите 2 числа:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="text" name="textEdit2" class="textEdit">
    <br>
    <INPUT type="submit" value="Вывести действия">
</FORM>


<?php

include "task1.php";

?>

<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="2">
    Задание 2.
    <br>
    Введите 2 числа:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="text" name="textEdit2" class="textEdit">
    <br>
    <INPUT type="submit" value="Вывести большее число">
</FORM>

<?php

include "task2.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="3">
    Задание 3,4.
    <br>
    Введите логин и пароль:
    <br>
    <INPUT type="text" name="log" class="textEdit">
    <br>
    <INPUT type="password" name="pass" class="textEdit">
    <br>
    <INPUT type="submit" value="Ввод">

</FORM>

<?php

include "task3_and_4.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="5">
    Задание 5,6.
    <br>
    Введите число:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="submit" value="Проверить на парность">
</FORM>

<?php

include "task5_and_6.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="7">
    Задание 7,8.
    <br>
    Введите число:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="submit" value="Проверка!">
</FORM>

<?php

include "task7_and_8.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="9">
    Задание 9.
    <br>
    Введите число:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="submit" value="Таблица умножения">
</FORM>

<?php

include "task9.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="10">
    Задание 10,11.
    <br>
    Введите диапазон От и До:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="text" name="textEdit2" class="textEdit">
    <br>
    <INPUT type="submit" value="Ввести">
</FORM>

<?php

include "task10_and_11.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="12">
    Задание 12.
    <br>
    Введите число:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit" id="input-id">
    <br>
    <INPUT type="submit" value="Отгадать">
</FORM>

<?php

include "task12.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="13">
    Задание 13.
    <br>
    Введите количество бактерий ДО и ПОСЛЕ:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="text" name="textEdit2" class="textEdit">
    <br>
    <INPUT type="submit" value="Ввести">
</FORM>

<?php

include "task13.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="14">
    Задание 14.
    <br>
    Введите число:
    <br>
    <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    <INPUT type="submit" value="Таблица умножения">
</FORM>

<?php

include "task14.php";

?>

</body>
</html>