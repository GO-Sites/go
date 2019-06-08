<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "config/head.php"; ?>
    <title>GO! Branding + Design</title>
</head>
<body>  
    <div class="loader">
        <img src="assets/img/logo.gif" class="logo-gif-load">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.gif" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><img src="assets/icons/bars.svg"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link search-item" href="#"><img class="search" src="assets/icons/search.svg"></span></a>
                    <a class="nav-item nav-link" href="who.php">Quem somos</a>
                    <a class="nav-item nav-link" href="index.php">O que fizemos</a>
                    <a class="nav-item nav-link" href="services.php">O que fazemos</a>
                    <a class="nav-item nav-link" href="where.php">Onde estamos</a>
                    <a class="nav-item nav-link" href="contact.php">Fale conosco</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="player">
        <audio class="go" autoplay hidden loop>
            <source src="assets/audio/go.mp3" type="audio/mpeg">
                    If you're reading this, audio isn't supported. 
        </audio>
    </div>
