<?php
if(!empty($_POST) && $_POST["form"]==1 && $_POST["textEdit1"]!=null && $_POST["textEdit2"]!=null) {

    $num1 = $_POST["textEdit1"];
    $num2 = $_POST["textEdit2"];

    echo "<br><table style='border: solid'><tr><td>";

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
