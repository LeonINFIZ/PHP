<?php
if(!empty($_POST) && $_POST["form"]==10 && $_POST["textEdit1"]!=null && $_POST["textEdit2"]!=null)
{
    $num1 = $_POST["textEdit1"];
    $num2 = $_POST["textEdit2"];

    echo "<br><table style='border: solid'><tr><td>";

    echo "Диапазон от $num1 до $num2:<br><br>";

    if($num1 > $num2) {
        $start = $num2;
        $stop = $num1;
    }
    else if($num1<$num2) {
        $start = $num1;
        $stop = $num2;
    }else{
        $start = $num1;
        $stop = $num2;
    }

    for($i = $start; $i <= $stop; $i++)
    {
        if($i == 0) {
            echo "Делить на 0 нельзя.";
            break;
        }else
        echo "10/$i = ", 10/$i, "<br>";
    }

    echo "</td></tr></table>";

}