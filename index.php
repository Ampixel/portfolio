<?php
session_start();
// require('element.php');
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
    <section id="resume" >
        <div class="container">
            <div class="section_title">
                <h2>My resume</h2>
                <span class="border"></span>
            </div>
            <div>
                <div class="element_category">
                    <h3>Expériences</h3>
                    <div class="element_category_icon">
                        <div class="iconspace"></div>
                    </div>
                </div>
                <div>
                    <?php include('element_exp.php') ?>
                </div>
            </div>
            <div class="for_category">
                <div class="element_category ">
                    <h3>Formations</h3>
                    <div class="element_category_icon">
                        <div class="iconspace"></div>
                    </div>
                </div>
                <div>
                    <?php include('element_for.php') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN SECTION RESUME -->
    <footer></footer>

</body>

</html>