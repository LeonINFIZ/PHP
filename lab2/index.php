<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Топалов Артём</title>

    <style>
        .AnswerTable {
            color: black;
            background-color: white;
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
    <INPUT type="text" name="Num1">
    <br>
    <INPUT type="text" name="Num2">
    <br>
    <INPUT type="submit" value="Вывести действия">
</FORM>


<?php

include $_SERVER["DOCUMENT_ROOT"]."/task1.php";


?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="2">
    Задание 2.
    <br>
    Введите 2 числа:
    <br>
    <INPUT type="text" name="Num1">
    <br>
    <INPUT type="text" name="Num2">
    <br>
    <INPUT type="submit" value="Вывести большее число">
</FORM>

<?php

include $_SERVER["DOCUMENT_ROOT"]."/task2.php";

?>


<br><br>

<FORM method= "POST">
    <INPUT type="hidden" name="form" value="3">
    Задание 3+4.
    <br>
    Введите логин и пароль:
    <br>
    <INPUT type="text" name="log">
    <br>
    <INPUT type="password" name="pass">
    <br>
    <INPUT type="submit" value="Ввод">

</FORM>

<?php

include $_SERVER["DOCUMENT_ROOT"]."/task3.php";

?>

</body>
</html>