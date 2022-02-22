<?php
if(!empty($_POST) && $_POST["form"]==5 && $_POST["textEdit1"]!=null) {

    $num = $_POST["textEdit1"];

    echo "<br><table style='border: solid'><tr><td>";

    if($num %2 == 0)
    {
        echo "Число $num парное";
    }
    else {
        echo "Число $num не парное";
    }

    echo "</td></tr></table>";

}