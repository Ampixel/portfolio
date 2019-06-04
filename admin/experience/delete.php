<?php
// DELETE
session_start();
require 'delete_exp.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Supprimer une expérience</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Supprimer une expérience</h1>
    <div>
        <form method="POST" action="delete_exp.php">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p>Êtes-vous sûr de vouloir supprimer ?</p>
            <button type="submit">Oui</button>
            <a href="../index.php">Non</a>
        </form>
    </div>

</body>

</html>