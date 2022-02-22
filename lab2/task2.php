<?php

if(!empty($_POST) && $_POST["form"]==2 && $_POST["textEdit1"]!=null && $_POST["textEdit2"]!=null) {
    $num1 = $_POST["textEdit1"];
    $num2 = $_POST["textEdit2"];

    echo "<br><table style='border: solid'><tr><td>";
    
    if ($num1 > $num2)
        echo "Num1 > Num2";
    else if ($num1 < $num2)
        echo "Num1 < Num2";
    else echo "Num1 = Num2";

    echo "</td></tr></table>";
}