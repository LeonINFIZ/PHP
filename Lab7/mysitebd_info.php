<?php

    $link = mysqli_connect('localhost', 'root', '', 'leon');

    if (mysqli_connect_errno()) {
        echo 'Connection error.('.mysqli_connect_errno().'): '.mysqli_connect_error();
    }

    $sql = "SELECT * FROM `notes`;";
    $bd = mysqli_query($link, $sql);
    $a = mysqli_fetch_all($bd);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j <= 4; $j++) {
            echo $a[$i][$j]."\t";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    $sql = "SELECT * FROM `comments`;";
    $bd = mysqli_query($link, $sql);
    $a = mysqli_fetch_all($bd);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j <= 5; $j++) {
            echo $a[$i][$j]."\t";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    $sql = "SELECT * FROM `privileges`;";
    $bd = mysqli_query($link, $sql);
    $a = mysqli_fetch_all($bd);

    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j <= 4; $j++) {
            echo $a[$i][$j]."\t";
        }
        echo "<br/>";
    }

?>