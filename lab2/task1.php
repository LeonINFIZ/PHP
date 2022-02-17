<?php
if(!empty($_POST) && $_POST["form"]==1 && $_POST["Num1"]!=null && $_POST["Num2"]!=null) {

    $num1 = $_POST["Num1"];
    $num2 = $_POST["Num2"];

    echo "<br><table border='1px'><tr><td>";

    echo "$num1 + $num2 = ", $num1 + $num2;

    echo "<br>";

    echo "$num1 - $num2 = ", $num1 - $num2;

    echo "<br>";

    echo "$num1 * $num2 = ", $num1 * $num2;

    echo "<br>";

    echo "$num1 / $num2 = ", $num1 / $num2;

    echo "<br>";

    echo "$num1 % $num2 = ", $num1 % $num2;

    echo "</td></tr></table>";
}
