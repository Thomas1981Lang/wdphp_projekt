<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SINGLES A LA CARTE</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/app/resources/css/reset.css">
    <link rel="stylesheet" href="/app/resources/css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

</head>
<body>
<header>

    <nav class="mobile_nav">

        <div class="mobile_nav_wrapper">
            <ul>
                <li><a href="/" >Home</a></li>
                <li><a href="/apps">App</a></li>
                <li><a href="/sneakpeak">Sneak Peek</a></li>
            </ul>
        </div>
        <div class="mobile_nav_background">
        </div>
    </nav>


    <div class="logo">
        <h1 class="title">Singles a la carte</h1>
        <h2 class="slogan">für Singles die wissen wo etwas passiert</h2>
    </div>

    <div class="nav_desktop">
        <span><a href="/" >Home</a></span>
        <span><a href="/apps">App</a></span>
        <span><a href="/sneakpeak">Sneak Peek</a></span>
        <span><a href="/signin" class="active">Sign In</a></span>
        <span><a href="/login">Login</a></span>
    </div>


    <nav class="mobile_login">
        <div class="mobile_login_wrapper">
            <ul>
                <li><a href="/signin" class="mobile_active">Sign In</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
        <div class="mobile_login_background">
        </div>
    </nav>
    </div>
</header>




<main class="login">

    <form class="login_form" method="" action="">
        <h2>Sign In</h2>
        <label for="username" class="">Username</label>
        <input type="text" id="username" name="username" class="" placeholder="Username" autofocus="">

        <label for="vorname" class="">Vorname</label>
        <input type="text" id="vorname" name="vorname" class="" placeholder="Vorname" autofocus="">

        <label for="nachname" class="">Nachname</label>
        <input type="text" id="nachname" name="nachname" class="" placeholder="Nachname" autofocus="">

        <label for="email" class="">E-Mail</label>
        <input type="text" id="email" name="email" class="" placeholder="E-Mail" autofocus="">

        <label for="geburtsdatum" class="">Geburtsdatum</label>
        <input type="date" id="geburtsdatum" name="geburtsdatum" class="" autofocus="">

        <label class="">Geschlecht</label>
        <div class="radio_button">
            <label for="male">männlich</label>
            <input type="radio" name="gender" id="male" value="male"><br>
            <label for="female">weiblich</label>
            <input type="radio" name="gender" id="female" value="female"><br>
        </div>

        <label class="">Orientierung</label>
        <div class="radio_button">
            <label for="male">Männer</label>
            <input type="radio" name="like_gender" id="like_male" value="male"><br>
            <label for="female">Frauen</label>
            <input type="radio" name="like_gender" id="like_female" value="female"><br>
            <label for="like_bi">Bi</label>
            <input type="radio" name="like_gender" id="like_bi" value="bi"><br><br>
        </div>
        <div class="radio_button">
            <input type="radio" name="like_gender" value="male"> männlich
            <input type="radio" name="like_gender" value="female"> weiblich
            <input type="radio" name="like_gender" value="bi"> beides
        </div>


        <label class="">Altersgruppe</label>
        <div class="altergruppe">
        <input type="number" id="von_alter" name="altersgruppe" class="" autofocus=""> -
        <input type="number" id="bis_alter" name="altersgruppe" class="" autofocus="">
        </div>

        <label for="prof_image" class="">Profilbild</label>
        <input type="file" id="prof_image" name="prof_image" class="" autofocus="">
        <p class="hinweis">kein Pflichtfeld / ohne Bild aber eingeschränkte Nutzung</p>



        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="" placeholder="Password">
        <button class="" type="submit">Login</button>
    </form>


</main>





<footer>
    <p><a href="https://github.com/Thomas1981Lang" target="_blank">&copy; TL </a></p>
    <p class="imnuda"><span><a href="#">Impressum</a></span><span><a href="#">Nutzungsbedingung</a></span><span><a
            href="#">Datenschutz</a></span></p>
</footer>


<script src="resources/js/singles.js"></script>
</body>
</html>




