<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="icon" href="image/metroexodusicon.png">
<link rel="stylesheet" href="style/style.css">
<meta charset="UTF-8"><meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Uniwersum Metro</title>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Uniwersum Metro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Książki
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Metro</a>
                    <a class="dropdown-item" href="#">Uniwersum Metro</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ciekawostki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Galeria</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Gry
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Metro 2033</a>
                    <a class="dropdown-item" href="#">Metro Last Light</a>
                    <a class="dropdown-item" href="#">Metro Exodus</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/Metro2033_foto.jpg"
                 alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/Metro2033_foto2.jpg"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/Metro2033_foto3.jpg"
                 alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</body>


</html>

