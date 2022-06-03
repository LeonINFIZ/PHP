<?PHP
    $link = new mysqli('localhost', 'root', '', 'leon');

    if (mysqli_connect_errno()) {
        echo 'Connection error.('.mysqli_connect_errno().'): '.mysqli_connect_error();
    }

    $login = $_GET['login'];
    $password = $_GET['password'];
    $name = $_GET['name'];
    $date_of_birth = $_GET['date_of_birth'];
    $sex = $_GET['sex'];
    $country = $_GET['country'];
    $email = $_GET['email'];
    $notes = $_GET['comment'];

    $sql = "INSERT INTO `kor` (`login`, `password`, `name`, `date_of_birth`, `sex`, `country`, `email`, `notes`) VALUES ('$login', '$password', '$name', '$date_of_birth', '$sex', '$country', '$email', '$notes');";

    if ($link->query($sql) === TRUE) {
        echo "Registration completed successfully!<br/>";
    } else {
        echo "Error: " . $sql . "<br>" ;
    }
    
    echo "<a href=\"index.php\">HOME PAGE</a>";
?>