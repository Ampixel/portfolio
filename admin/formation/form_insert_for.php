<?php
session_start();
require 'insert_for.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajouter une formation</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Ajouter une formation</h1>
    <div>
    <form method="POST" action="insert_for.php">
    <table>
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" required /></td>
        </tr>
        <tr>
            <td>School</td>
            <td><input type="text" name="school" required/></td>
        </tr>
        <tr>
            <td>date début</td>
            <td><input type="date" name="start_date" required/></td>
        </tr>
        <tr>
            <td>date fin</td>
            <td><input type="date" name="end_date" required/></td>
        </tr>
        <tr>
            <td>Toujours en cours ?</td>
            <td><input type="checkbox" name="tjrs" value="1" /></td>
        </tr>
        <tr>
            <td>Résumé</td>
            <td><input type="text" name="resume" /></td>
        </tr>
    </table>
    <button type="submit">Ajouter</button>
    <a href="../index.php">retour liste</a>
</form>
    </div>
        
</body>

</html>