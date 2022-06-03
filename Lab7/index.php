

<html>
    <head>
        <title>LabWork_7</title>
    </head>
    <body>
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'leon');

        if (mysqli_connect_errno()) {
            echo 'Connection error.('.mysqli_connect_errno().'): '.mysqli_connect_error();
        }

        echo "<a>Registration:</a>";
        echo "<form action = \"registration.php\" method = \"get\">";
        echo "    Login:          <input type = \"text\" name = \"login\" /><br/>";
        echo "    Password:       <input type = \"text\" name = \"password\" /><br/>";
        echo "    Name:           <input type = \"text\" name = \"name\" /><br/>";
        echo "    Date of Birth:  <input type = \"date\" name = \"date_of_birth\" /><br/>";
        echo "    Sex:            <input type = \"text\" name = \"sex\" /><br/>";
        echo "    Country:        <input type = \"text\" name = \"country\" /><br/>";
        echo "    Email:          <input type = \"text\" name = \"email\" /><br/>";
        echo "    Comment:        <input type = \"text\" name = \"comment\" /><br/>";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Sign up\" /><br/>";
        echo "</form>";

        echo "<form action = \"user_info.php\" method = \"get\">";
        echo "    Show users: ";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Show\" /><br/>";
        echo "</form>";

        #echo print_r($a);

        echo "<form action = \"mysitebd_info.php\" method = \"get\">";
        echo "    Show MySiteBD: ";
        echo "    <input type = \"submit\" name = \"submit\" value = \"Show\" /><br/>";
        echo "</form>";

        ?>
    </body>
</html>