<?php
session_start();

?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="design/default.scss">

</head>

<body>
    <!-- HEADER -->
        <div>
        <?php 
            if (isset($_GET['error'])){ 
                echo '<p id="error"> Email ou mot de passe incorrect.</p>';
             }
        ?>
            <!-- ESPACE CONNECTION -->
          <div>
            <form method="POST" action="trait_connexion.php">
                <table>
                    <tr>
                        <td>Email : </td>
                        <td><input type="email" name="email" placeholder="Ex: example@email.com" required></td>
                    </tr>
                    <tr>
                        <td>Mot de passe : </td>
                        <td><input type="password" name="password" placeholder="Ex: *****" required></td>
                    </tr>
                </table>
                <p><label><input type="checkbox" name="connect">Connexion automatique</label></p>
                <div id="button">
                    <button>Connexion</button>
                    <a href="index.php">Retour portfolio</a>
                </div>
            </form>
        </div>  
</body>

</html>