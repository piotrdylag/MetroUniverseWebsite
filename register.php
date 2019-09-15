<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Ciekawostki o Meto jak i samym autorze">
    <meta name="keywords" content="Uniwersum, Metro, Glukhovski, ciekawostki, nowości">
    <meta name="author" content="Piotr Dylag">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Uniwersum Metro - Ciekawostki</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik Mono One' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="logo">
    <img src="image/universum-logo.png" class="logo-image">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="main.php">Główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Książki
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="ksiazki-metro.php">Metro</a>
                    <a class="dropdown-item" href="uniwersum-metro.php">Uniwersum Metro</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ciekawostki.php">Ciekawostki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeria.php">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gry.php">Gry</a>
            </li>
        </ul>
    </div>
</nav>
<div class="mainsite">
    <div class="zareje">
    <h1 class="zarejestrujsie ">ZAREJESTRUJ SIĘ!"</h1>
    <div class="container-fluid" id="registerform">
        <form action="register.php?attempt" method="post" id="registering">
            <input type="text" name="login" placeholder="Nazwa użytkownika"><br><br>
            <input type="password" name="passwd" placeholder="Hasło"><br><br>
            <input type="email" name="email" placeholder="E-mail"><br><br>
            <input type="submit" name="register" value="Gotowe">
            <button type="button" class="btnback" onclick="location.href = 'main.php'">Powrót</button>
        </form>
    </div>
</div>
</div>
<div class="footer">
    <b>&copy Project by Piotr Dylag</b> <br>
    Uniwersytet Pedagogiczny im. Komisji Edukacji Narodowej w Krakowie 2019
</div>
</body>
<?php
if(isset($_REQUEST['attempt'])) {
    $servername = "localhost";
    $username = "dylpio";
    $password = "myazWtUPsql";
    $dbname = "dylpio";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);;
    if (!$conn) {
        die("Connection failed: " . mysqli_error($conn));
    }
    if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['email'])) {
        $usrnm = $_POST['login'];
        $password = $_POST['passwd'];
        $email = $_POST['email'];
    }else{
        echo "Podaj kompletne dane do rejestracji!";
    }

    $sql = "INSERT INTO loginsTB (id, login, pass, email) VALUES ('','$usrnm', '$password', '$email')";
    if (mysqli_query($conn, $sql)=== TRUE) {
        echo "Zostałeś pomyślnie zarejestrowany!";
    } else {
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }
    if (!isset($_SESSION["login"])) {
        header("Location: registeredsite.php");
    }
    mysqli_close($conn);
}

?>
</html>


