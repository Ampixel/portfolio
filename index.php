<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" type="text/css" href="design/default.scss">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <header class="container">
        <nav>
            <ul>
                <li><?php 
                if(isset($_SESSION['connect'])){
                    echo '<a href="admin/index.php">Administrer</a>';
                }else{
                    echo'<a href="page_connexion.php">Se connecter</a></li>';
                }
                ?></li>
            </ul>
        </nav>
        <div class="info">
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
            <div class="section_title">
                <h2>My resume</h2>
                <span class="border"></span>
            </div>
            <div class="section">
                <div>
                    <hr class="separation" />
                </div>
                <!-- experiences -->
                <div>
                    <div class="element_category">
                        <a class="elementTitre">Expériences</a>
                        <div class="element_category_icon">
                            <div class="iconspace">
                                <i class="fa fa-folder"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php include('element_exp.php') ?>
                    </div>
                </div>
                <!-- formation -->
                <div class="for_category">
                    <div class="element_category ">
                        <a class="elementTitre">Formations</a>
                        <div class="element_category_icon">
                            <div class="iconspace">
                                <i class="fa fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <?php include('element_for.php') ?>
                    </div>
                    <div class="element_category_icon">
                    </div>
                </div>
                <div class="iconspace_end">
                    <i class="fa fa-bookmark"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN SECTION RESUME -->
    <footer></footer>

</body>

</html>