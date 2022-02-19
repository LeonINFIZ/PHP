<?php

if(!empty($_POST) && $_POST["form"]==3 && $_POST["log"]!=null && $_POST["pass"]!=null) {

    $LOGIN = $_POST["log"];
    $PASS = $_POST["pass"];

    $users = [
        "logins" => array (
        "log1" => "Андрей",
        "log2" => "Михаил",
        "log3" => "Артём",
        "log4" => "Георгий"
        ),
        "pass" => array (
            "log1" => "123log1",
            "log2" => "123log2",
            "log3" => "123log3",
            "log4" => "123log4"
        )
    ];

    echo "<br><table border='1px'><tr><td>";

    $ok = false;

    foreach ($users["logins"] as $log => $name)
    {
        if($LOGIN == $log)
        {
            foreach ($users["pass"] as $logInPass => $password)
            {
                if($log == $logInPass && $PASS == $password)
                {
                    echo "Здравствуйте $name!";
                    $ok = true;
                }
            }
        }
    }


    if($ok == false)
        echo "Вы ввели неправильный логин или пароль";

    echo "</td></tr></table>";
}

