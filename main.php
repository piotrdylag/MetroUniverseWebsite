<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="Strona poświęcona uniwersum Metra Glukhovskiewgo">
    <meta name="keywords" content="Uniwersum, Metro, Glukhovski">
    <meta name="author" content="Piotr Dylag">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
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
<!--                                <div class="md-form form-sm mb-5">-->
<!--                                    <i class="fas fa-envelope prefix"></i>-->
<!--                                    <input type="text" id="modalLRInput10" name="login"form-control form-control-sm validate">-->
<!--                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Username</label>-->
<!--                                </div>-->
<!--                                    <div class="md-form form-sm mb-4">-->
<!--                                    <i class="fas fa-lock prefix"></i>-->
<!--                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">-->
<!--                                    <label data-error="wrong" data-success="right" name="passwd" for="modalLRInput11">Your password</label>-->
<!--                                </div>-->
<!--                                <div class="text-center mt-2">-->
<!--                                    <input type="submit" name="Log in" value="Log in">-->
<!--                                </div>-->
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

<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/Metrofoto.jpg"
                 alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/Metrofoto2.jpg"
                 alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image/Metrofoto3.jpg"
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
<div class="mainsite">
    <div class="oautorze">
        <img src="image/dmitrijgluchowski.jpg" class="dmitrijphoto" align="left">
        <p class="autor"><b>Dmitrij Głuchowski</b> urodził się i wychował w Moskwie. Jego rodzina jest zaliczana do
            rosyjskiej inteligencji.
            Rozpoczął edukację w moskiewskiej szkole im. W. D. Polienowa z rozszerzoną nauką języka francuskiego. Już
            wtedy postanowił,
            że zostanie pisarzem. W wieku 15 lat wpadł na pomysł fabuły Metra 2033. W wieku 17 lat opuścił Rosję i
            przez cztery i pół roku
            mieszkał i uczył się w Izraelu, gdzie studiował na Uniwersytecie Hebrajskim w Jerozolimie.
            W latach 2002-2005, mieszkał we francuskim Lyonie, gdzie pracował dla ogólnoeuropejskiego kanału Euronews.
            Po tym okresie powrócił do ojczyzny, by rozpocząć pracę w świeżo utworzonym kanale telewizyjnym Russia
            Today.
            Przez trzy lata, jako akredytowany przy Kremlu dziennikarz, podróżował dookoła świata.
            Był korespondentem wojennym w Izraelu i Abchazji, pracował w Radio Rossiji (Радио России).
            Od 2007 do 2009 roku był prezenterem radiowym stacji Majak (Маяк). Od marca 2009 roku prowadzi
            popularnonaukową audycję
            Fantastyczne śniadanie (Фантастический завтрак) na internetowym kanale PostTV.
            Pisze na łamach Harper’s Bazaar, l’Officiel i Playboya. Laureat nagrody Europejskiego Towarzystwa Fantastyki
            Naukowej.
            Należy do młodego pokolenia rosyjskich literatów, krytycznie oceniających politykę rosyjskich władz i
            wzywających do pełnej demokratyzacji ustroju swojego kraju.
            Jego debiutem literackim jest postapokaliptyczna powieść Metro 2033 (Метро2033), którą napisał w wieku 18
            lat.
            W 2002 roku opublikował ją na swojej stronie internetowej, gdzie każdy mógł ją przeczytać za darmo.
            W 2005 roku powieść została opublikowana nakładem wydawnictwa Eksmo (Эксмо), a w 2007 roku wznowiona
            przez wydawnictwo Populiarnaja litieratura (Популярная литература). W Polsce powieść Metro 2033 ukazała się
            w 2010 roku nakładem wydawnictwa Insignis Media.
            Prawa do tłumaczenia Metra 2033 zostały sprzedane do 22 krajów. Dmitrij Głuchowski jest także autorem
            opublikowanych w internecie zbiorów opowiadań Noc (Ночь),
            Opowiadania o zwierzętach (Рассказы о животных) i sztuki INFINITA TRISTESSA.
            W 2007 roku ukazała się Czas zmierzchu (Сумерки). Wedle słów samego autora pozycja ta miała się jak
            najbardziej różnić od jego debiutanckiej powieści,
            aby pokazać, że nie należy go kojarzyć tylko z jednym utworem.
            10 marca 2009 roku Głuchowski wydał książkę Metro 2034 (Метро 2034, w Polsce ukazała się w listopadzie
            2010).
            Jak twierdzi autor, nie jest to kontynuacja Metra 2033, a niezależna historia z innymi bohaterami.
            Swój pomysł na fabułę i przedstawione realia rozwinął w międzynarodowy projekt o nazwie Uniwersum Metro
            2033.
            Pod jego szyldem, stosując się do ustalonych przez Głuchowskiego reguł, piszą i publikują autorzy z całego
            świata
            (w Polsce w ramach Uniwersum swoje powieści stworzyli Paweł Majka, Robert J. Szmidt i Artur Chmielewski).
            W roku 2015 Głuchowski ukończył powieść Metro 2035, która stanowi kontynuację losów Artema, głównego
            bohatera Metra 2033, a zarazem zamyka cykl Metro, tworząc wraz z poprzednimi tomami kompletną trylogię.</p>
    </div>
</div>
<div class="footer">
    <b>&copy Project by Piotr Dylag</b> <br>
    Uniwersytet Pedagogiczny im. Komisji Edukacji Narodowej w Krakowie 2019
</div>
</body>
<?php
//if(isset($_REQUEST['attempt'])){
//    $conn = mysqli_connect('localhost', 'dylpio', 'myazWtUPsql', 'dylpio' );
//    if (!$conn) {
//        die("Connection failed: " . mysqli_error($conn));
//    }
//    $username = $_POST['login'];
//    $passwd = $_POST['passwd'];
//
//    $query = mysqli_query($conn, "
//    SELECT login
//    FROM loginsTB
//    WHERE login = '$username'
//    AND pass = '$passwd'") or die(mysqli_error($conn));
//
//    $total =  mysqli_num_rows($query);
//    if($total > 0){
//        session_start();
//        $_SESSION['login'] = $username;
//        $_SESSION['pass'] = $passwd;
//        header("location: loggedsite.php");
//    }
//
//    if(isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['email'])) {
//        $username = $_POST['login'];
//        $password = $_POST['passwd'];
//        $email = $_POST['email'];
//    }else{
//        echo "Podaj kompletne dane do rejestracji!";
//    }
//
//    $sql = "INSERT INTO loginsTB (id, login, pass, email) VALUES ('','$username', '$password', '$email')";
//    if (mysqli_query($conn, $sql)=== TRUE) {
//        echo "Zostałeś pomyślnie zarejestrowany!";
//    } else {
//        echo "ERROR: " . $sql . "<br>" . $conn->error;
//    }
//    header("location: loggedsite.php");
//    mysqli_close($conn);
//}
//
//?>
</html>

