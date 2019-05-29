<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" type="text/css" href="../design/default.scss">

</head>

<body>
    <h1>Listes des items</h1>
    <div class="container_admin">
        <div>
            <div>
                <h2>Experiences</h2>
                <a href="form_insert_exp.php"><span>+</span> Ajouter</a>
            </div>
            <table>
                <?php include('experience.php') ?>
            </table>
        </div>
        <div>
            <div>
                <h2>Education</h2>
                <a href="form_insert_for.php"><span>+</span> Ajouter</a>
            </div>
            <table>
            <?php include('education.php') ?>
            </table>
        </div>
        <a href="../index.php">Retour portfolio</a>
    </div>
</body>

</html>