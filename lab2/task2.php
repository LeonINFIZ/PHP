<?php

if(!empty($_POST) && $_POST["form"]==2 && $_POST["Num1"]!=null && $_POST["Num2"]!=null) {
    $num1 = $_POST["Num1"];
    $num2 = $_POST["Num2"];

    echo "<br><table border='1px'><tr><td>";
    
    if ($num1 > $num2)
        echo "Num1 > Num2";
    else if ($num1 < $num2)
        echo "Num1 < Num2";
    else echo "Num1 = Num2";

    echo "</td></tr></table>";
}