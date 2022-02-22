<?php
if(!empty($_POST) && $_POST["form"]==14 && $_POST["textEdit1"]!=null) {

    $num = $_POST["textEdit1"];

    echo "<br><table border='1' ><tr>";

    for($i = $num, $k = 0; $i<=9; $i++, $k++) {
        echo "<th>";
        for ($j = 1; $j <= 10; $j++)
        {
            echo "$i * $j = ".$i*$j."&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "<br>";
        }
        echo "</th>";

        if($k == 0)
        {
            $i = 1;
        }
    }
    echo "</tr></table>";

}