<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Galeria zdjęć i obrazków ze świata Metro">
    <meta name="keywords" content="Uniwersum, Metro, Glukhovski, zdjęcia, obrazki, galeria">
    <meta name="author" content="Piotr Dylag">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Uniwersum Metro - Galeria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/macy@2.5.0/dist/macy.min.js"></script>
</head>
<body>
<div class="logo">
    <img src="image/universum-logo.png" class="logo-image" alt="Uniwersum metro Logo">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Główna <span class="sr-only">(current)</span></a>
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
            <button type="button" class="btnlogin" onclick="location.href = 'loggin.php'"> Login</button>
        </ul>
    </div>
    </div>
<!--    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
<!--        <div class="modal-dialog cascading-modal" role="document">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-c-tabs">-->
<!---->
<!--                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>-->
<!--                                Login</a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>-->
<!--                                Register</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    >-->
<!--                    <div class="tab-content">-->
<!--                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">-->
<!---->
<!--                            <div class="modal-body mb-1">-->
<!--                                <form action="main.php?attempt" method="post" id="logging">-->
<!--                                    <div class="md-form form-sm mb-5">-->
<!--                                        <i class="fas fa-envelope prefix"></i>-->
<!--                                        <input type="text" id="modalLRInput10" name="login"form-control form-control-sm validate">-->
<!--                                        <label data-error="wrong" data-success="right" for="modalLRInput10">Username</label>-->
<!--                                    </div>-->
<!--                                    <div class="md-form form-sm mb-4">-->
<!--                                        <i class="fas fa-lock prefix"></i>-->
<!--                                        <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">-->
<!--                                        <label data-error="wrong" data-success="right" name="passwd" for="modalLRInput11">Your password</label>-->
<!--                                    </div>-->
<!--                                    <div class="text-center mt-2">-->
<!--                                        <input type="submit" name="Log in" value="Log in">-->
<!--                                    </div>-->
<!--                            </div>-->
<!--                            <div class="modal-footer">-->
<!--                                <div class="options text-center text-md-right mt-1">-->
<!--                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>-->
<!--                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>-->
<!--                                </div>-->
<!--                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="tab-pane fade" id="panel8" role="tabpanel">-->
<!---->
<!--                            <div class="modal-body">-->
<!--                                <div class="md-form form-sm mb-5">-->
<!--                                    <i class="fas fa-envelope prefix"></i>-->
<!--                                    <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">-->
<!--                                    <label data-error="wrong" data-success="right" name="email" for="modalLRInput12">Your email</label>-->
<!--                                </div>-->
<!---->
<!--                                <div class="md-form form-sm mb-5">-->
<!--                                    <i class="fas fa-lock prefix"></i>-->
<!--                                    <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">-->
<!--                                    <label data-error="wrong" data-success="right" name="pass" for="modalLRInput13">Your password</label>-->
<!--                                </div>-->
<!---->
<!--                                <div class="md-form form-sm mb-4">-->
<!--                                    <i class="fas fa-lock prefix"></i>-->
<!--                                    <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">-->
<!--                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>-->
<!--                                </div>-->
<!---->
<!--                                <div class="text-center form-sm mt-2">-->
<!--                                    <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                            <div class="modal-footer">-->
<!--                                <div class="options text-right">-->
<!--                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>-->
<!--                                </div>-->
<!--                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="text-center">-->
<!--        <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Login/Register</a>-->
<!--    </div>-->
</nav>

<div class="mainsite">
    <div class="gallery">
        <img class="item" src="image/annametroexodus.jpg" alt="Anna">
        <img class="item" src="image/ArtyomMetroExodus.jpg" alt="Metro Exodus">
        <img class="item" src="image/ArtyomMetroExodus.png" alt="Artyom">
        <img class="item" src="image/cropped-616-357-943955.jpg" alt="Metro">
        <img class="item" src="image/dmitrijgluchowski.jpg" alt="Dmitrji Glukhovski">
        <img class="item" src="image/ksiazki.jpg" alt="Książki uniwersum">
        <img class="item"src="image/metro_2033_redux.jpg" alt="Metro 2033">
        <img class="item" src="image/Metro2033_foto.jpg" alt="Metro">
        <img class="item" src="image/Metro2033_foto2.jpg" alt="Metro">
        <img class="item" src="image/Metro2033_foto3.jpg" alt="Metro">
        <img class="item" src="image/metro2033_ksiazka.jpg" alt="Metro">
        <img class="item" src="image/metro2034_ksiazka.jpg" alt="Metro">
        <img class="item" src="image/metro2035_ksiazka.jpg" alt="Metro">
        <img class="item" src="image/metroex.jpeg" alt="Metro Exodus">
        <img class="item" src="image/Metrofoto.jpg" alt="Metro">
        <img class="item" src="image/Metrofoto2.jpg" alt="Metro">
        <img class="item" src="image/Metrofoto3.jpg" alt="Metro">
        <img class="item" src="image/metrolastlight.jpg" alt="Metro">
        <img class="item" src="image/MillerMetroExodus.png" alt="Metro">
        <img class="item" src="image/postapotlo.jpg" alt="Metro">
        <img class="item"src="image/uniwersum.png" alt="Metro">
        <script>
            const msnry = new Macy({
                container: '.gallery',
                mobileFirst: true,
                columns: 1,
                breakAt: {
                    400: 2,
                    700: 3,
                    1100: 4,
                },
                margin: {
                    x: 20,
                    y: 20,
                }
            })
        </script>
    </div>
</div>
<div class="footer">
    <b>&copy Project by Piotr Dylag</b> <br>
    Uniwersytet Pedagogiczny im. Komisji Edukacji Narodowej w Krakowie 2019
</div>
</body>

</html>


