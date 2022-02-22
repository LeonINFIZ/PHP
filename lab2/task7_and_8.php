<?php
if(!empty($_POST) && $_POST["form"]==7 && $_POST["textEdit1"]!=null) {

    $num = $_POST["textEdit1"];

    $correctNum = 4;

    echo "<br><table style='border: solid'><tr><td>";

    if($num == $correctNum)
        echo "<div style='color: red'>", "Правильно! Загаданное число = $correctNum";
    else if($num<$correctNum)
        echo "Число $num - не правильно. Загаданное чилос БОЛЬШЕ.";
    else if($num>$correctNum)
        echo "Число $num - не правильно. Загаданное чилос МЕНЬШЕ.";

    echo "</td></tr></table>";

}