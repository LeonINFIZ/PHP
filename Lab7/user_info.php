<?php
    $link = mysqli_connect('localhost', 'root', '', 'leon');

    if (mysqli_connect_errno()) {
        echo 'Connection error.('.mysqli_connect_errno().'): '.mysqli_connect_error();
    }

    $sql = "SELECT * FROM `kor`;";
    $bd = mysqli_query($link, $sql);
    $a = mysqli_fetch_all($bd);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j <= 8; $j++) {
            echo $a[$i][$j]."\t";
        }
        echo "<br/>";
    }

echo "<a href=\"index.php\">HOME PAGE</a>";
?>