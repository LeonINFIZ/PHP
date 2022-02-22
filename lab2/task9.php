<?php
if(!empty($_POST) && $_POST["form"]==9 && $_POST["textEdit1"]!=null)
{
    $num = $_POST["textEdit1"];
    $colors = array("red", "orange", "deeppink", "green", "blue", "navy", "purple", "fuchsia", "lightpink", "grey", "black");

    echo "<br><table style='border: solid'><tr><td>";

    for ($i = 1; $i <= 10; $i++)
    {
        echo "<div style= 'color: $colors[$i]'>";
        echo $num. "*". $i. "= ". $i*$num;
        echo '</div><br>';
    }

    echo "</td></tr></table>";

}