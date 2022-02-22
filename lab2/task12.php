<?php
if(!empty($_POST) && $_POST["form"]==12 && $_POST["textEdit1"]!=null) {

    $num = $_POST["textEdit1"];

    $correctNum = 4;

    $text = "";

    if($num == $correctNum)
        $text = "Правильно! Загаданное число = $correctNum";
    else if($num<$correctNum)
        $text = "Число $num - не правильно. Загаданное чиcло БОЛЬШЕ.";
    else if($num>$correctNum)
        $text = "Число $num - не правильно. Загаданное чиcло МЕНЬШЕ.";

    echo "<script type='text/javascript'>

    alert('$text');

    </script>";


}