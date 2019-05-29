<?php
session_start();

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" type="text/css" href="design/default.scss">

</head>

<body>
    <!-- HEADER -->
    <header class="container">
    <a href="page_connexion.php">Se connecter</a>
        <nav>
            <ul>
                <li>menu</li>
            </ul>
        </nav>
        <div>
            <p>Images du logo</p>
            <!-- <img src="img/logoampixel-orange.png" alt="logo" id="logo"> -->
            <h1>Monardo Amandine</h1>
            <h2>developpeuse conceptrice d'applications</h2>
        </div>
    </header>
    <!-- FIN HEADER -->
    <!-- SECTION RESUME -->
    <section id="resume">
        <div class="container">
            <div class="section-title">
                <h2>My resume</h2>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="title">
                    <a>Experiences</a>
                    <span>icone</span>
                </div>
                <div class="element_rigth">
                    <p>Titre</p>
                    <p>Company</p>
                    <p>Date</p>
                    <p>Resume</p>
                </div>
                <div class="element_left">
                    <p>Titre</p>
                    <p>Company</p>
                    <p>Date</p>
                    <p>Resume</p>
                </div>
            </div>
            <div class="row">
                <div class="title">
                    <a>Education</a>
                    <span>icone</span>
                </div>
                <div class="element_rigth">
                    <p>Titre</p>
                    <p>Company</p>
                    <p>Date</p>
                    <p>Resume</p>
                </div>
                <div class="element_left">
                    <p>Titre</p>
                    <p>Company</p>
                    <p>Date</p>
                    <p>Resume</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN SECTION RESUME -->
    <footer></footer>

</body>

</html>