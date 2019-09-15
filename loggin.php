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
    <div class="zalog">
    <h1>ZALOGUJ SIĘ</h1>
    <div class="container-fluid" id="loginform">
        <form action="login.php?attempt" method="post" id="logging">
            <input type="text" name="login" placeholder="Nazwa użytkownika"><br><br>
            <input type="password" name="passwd" placeholder="Hasło"><br><br>
            <input type="submit" name="log in" value="Log in">
            <button type="button" class="btnback" onclick="location.href = 'main.html'">Powrót</button>
        </form>
        <div class = "register">
            <p>Nie masz konta?</p>
            <a href="register.php">Zarejestruj się tutaj!</a>
        </div>
    </div>
    </div>
</div>
<div class="footer">
    <b>&copy Project by Piotr Dylag</b> <br>
    Uniwersytet Pedagogiczny im. Komisji Edukacji Narodowej w Krakowie 2019
</div>
</body>
<?php
if(isset($_REQUEST['attempt'])){
    $conn = mysqli_connect('localhost', 'dylpio', 'myazWtUPsql', 'dylpio' );
    if (!$conn) {
        die("Connection failed: " . mysqli_error($conn));
    }
    $username = $_POST['login'];
    $passwd = $_POST['passwd'];

    if(!isset($_POST['login'], $_POST['passwd'])){
        die ("Login albo hasło jest nie poprawne!");
    }
    $query = mysqli_query($conn, "
    SELECT login 
    FROM loginsTB
    WHERE login = '$username'
    AND pass = '$passwd'") or die(mysqli_error($conn));

    $total =  mysqli_num_rows($query);
    if($total > 0){
        session_start();
        $_SESSION['login'] = $username;
        $_SESSION['pass'] = $passwd;
        header("location: loggedsite.php");
    }else {
        echo('Niewłaściwy login albo hasło');
    }

    mysqli_close($conn);
}


?>
</html>


