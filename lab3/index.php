<?php

echo "Задание 1.<br>";
$array5num = array(1,2,3,4,5);
foreach ($array5num as $number)
{
    echo $number, "^2 = ", $number*$number, "<br>";
}

echo "<br>Задание 2.<br>";

$contry_data = array (
    'Украина' => array (  'population' => 46, 'capital' => 'Киев' ),
    'Нидерланды' => array (  'population' => 17.02, 'capital' => 'Амстердам' ),
    'Норвегия' => array (  'population' => 5.233, 'capital' => 'Осло' ),
);

echo "<table border='2px' style='text-align: center'><tr><th>Страна</th><th>Население</th><th>Столица</th></tr>";
foreach ( $contry_data as $country => $data )  {
    echo "<tr><td>".$country."</td>";
    foreach ( $data as $key => $value )
        echo "<td>".$value."</td>";
    echo "</tr>";
}
echo "</table><br>";

echo "<table border='2px' style='text-align: center'><tr><th>Страна</th>";
foreach ( $contry_data as $country => $data )
    echo "<td>".$country."</td>";
echo "</tr><tr><th>Население</th>";
foreach ( $contry_data as $country => $data )
    echo "<td>".$data[ 'population' ]."</td>";
echo "</tr><tr><th>Столица</th>";
foreach ( $contry_data as $country => $data )
    echo "<td>".$data[ 'capital' ]."</td>";
echo "</tr></table><br>";

?>

<FORM method= "POST">
    <INPUT type="hidden" name="form">
    Задание 3.<br>
    1. Фамилия<br>
    2. Имя<br>
    3. Возраст<br>
    4. e-mail<br>
    <br>

    1. <INPUT type="text" name="textEdit1" class="textEdit">
    <br>
    2. <INPUT type="text" name="textEdit2" class="textEdit">
    <br>
    3. <INPUT type="text" name="textEdit3" class="textEdit">
    <br>
    4. <INPUT type="text" name="textEdit4" class="textEdit">
    <br>
    <INPUT style="background-color: deeppink; margin-left: 16px; margin-top: 10px; color: white" type="submit"
           value="               Готово                ">

</FORM>

<?php
if(!empty($_POST) && $_POST["textEdit1"]!=null && $_POST["textEdit2"]!=null  && $_POST["textEdit3"]!=null  && $_POST["textEdit4"]!=null)
{
    $surname = $_POST["textEdit1"];
    $name    = $_POST["textEdit2"];
    $age     = $_POST["textEdit3"];
    $email   = $_POST["textEdit4"];

    if(is_numeric($surname))
    {
        echo "Фамилия это не число.";
        return;
    }
    if(is_numeric($surname))
    {
        echo "Имя это не число.";
        return;
    }
    if(!is_numeric($age))
    {
        echo "Возраст это не буквы.";
        return;
    }
    if(preg_match("/[А-Яа-я]/", $email))
    {
        echo "Не правильный e-mail.";
        return;
    }


    $information =  array(
            "Фамилия" => $surname,
            "Имя" => $name,
            "Возраст" => $age,
            "E-mail" => $email
    );

    echo "<table border='2px' style='text-align: center'><tr>";
    foreach ($information as $item => $info)
    {
        echo "<th>",$item,"</th>";
    }

    echo "<tr>";

    foreach ($information as $item => $info)
    {
        echo "<td>",$info,"</td>";
    }

    echo "</tr>";

    echo "</tr></table>";

}

echo "<br><br>";
echo "Задание 4";
echo "<br>";

$kvadrat = array();
$kub = array();
$vmeste = array();

$num = 0;

echo "<table border='2px'>";

echo "<tr><th>Квадрат</th><td>";
for ($i = 10; $i<=20; $i++)
{
    $kvadrat[$num] = pow($i,2);

    echo $kvadrat[$num], " ";

    $num++;
}
echo "</td></tr>";
echo "<tr><th>Куб</th><td>";
for ($i = 1; $i<=10; $i++)
{
    $kub[$num] = pow($i,3);

    echo $kub[$num], " ";

    $num++;
}
echo "</td></tr>";

$vmeste = $kvadrat+$kub;

echo "<tr><th>Вместе</th><td>";
for ($i = 0; $i<=20; $i++)
{
    echo $vmeste[$i], " ";
}
echo "</td></tr>";

echo "</table>";