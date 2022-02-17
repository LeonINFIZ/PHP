<?PHP
$rows=5;
$colums=3;
echo '<html><body>';
echo '<table border="2">';
for ($i=1;$i<=$rows;$i++)
{ echo '<tr>';
    for ($j=1;$j<=$colums;$j++)
    { if ((($i+$j)%2)==0){$c="green";} else {$c="red";}
        echo '<td bgcolor='.$c.'><font color="yellow">'.$i,$j.'</font></td>';
    } /*end of for $j*/
    echo '</tr>';
} /*end of for $i*/
echo '</table>';

echo "Выполняем задание лабораторной работы №1<br>";
include ("author.php");
echo "<div style = 'text-align: center'>";
for($i = 1; $i<=9; $i++) {
    echo "<p style = 'margin-top: 0px'>";
    for ($j = 1; $j <= 9; $j++)
    {
        echo "$i * $j = ".$i*$j."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "</p>";
}
echo "</div>";

echo "<table style = 'text-align: center'><tr bgcolor='FFD700'><td >Gold</td><td>#FFD700</td><td>255, 215, 0</td></tr>";
echo "<tr bgcolor='FFA500'><td>Orange</td><td>#FFA500</td><td>255, 165, 0</td></tr>";
echo "<tr bgcolor='8B008B' style = 'color:white'><td>DarkMagenta</td><td>#8B008B</td><td>139, 0, 0</td></tr>";
echo "<tr bgcolor='FF0000' style = 'color:white'><td>Red</td><td>#FF0000</td><td>255, 0, 0</td></tr>";
echo "<tr bgcolor='000080' style = 'color:white'><td>Navy</td><td>#000080</td><td>0, 0, 128</td></tr></table>";



echo '</body>
</html>';

//PHPinfo();
