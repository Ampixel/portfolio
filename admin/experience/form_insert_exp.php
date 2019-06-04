<?php
session_start();
require 'insert_exp.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ajouter une expérience</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Ajouter une expérience</h1>
    <div>
    <form method="POST" action="insert_exp.php">
    <table>
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" required /></td>
        </tr>
        <tr>
            <td>Entreprise</td>
            <td><input type="text" name="company" required/></td>
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
            <td>Résumé</td>
            <td><input type="text" name="resume" /></td>
        </tr>
    </table>
    <button type="submit">Ajouter</button>
    <a href="../index.php"">retour liste</a>
</form>
    </div>
        
</body>

</html>