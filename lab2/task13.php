<?php
if(!empty($_POST) && $_POST["form"]==13 && $_POST["textEdit1"]!=null && $_POST["textEdit2"]!=null) {

    $num1 = $_POST["textEdit1"];
    $num2 = $_POST["textEdit2"];

    echo "<br><table style='border: solid'><tr><td>";

    if($num1>$num2)
        echo "Начальное количество должно быть меньше конечного.";
    else{

    $tempNum = $num1;

    $i = 1;
    $time = 1;
    while($tempNum<$num2)
    {
        $tempNum*=2;
        if($tempNum<$num2) {
            echo "$i. Прошло времени (час): $time, - имеем $tempNum бактерий.<br>";
            $i++; $time++;
        }else{
            $time = ($i*$num2)/$tempNum;
            echo "$i. Прошло времени (час): $time, - имеем $num2 бактерий.<br>";
        }
    }

    }

    echo "</td></tr></table>";

}