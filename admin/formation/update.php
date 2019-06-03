<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modifier une expérience</title>
    <link rel="stylesheet" type="text/css" href="../design/default.scss">

</head>

<body>
    <h1>Modifier une formation</h1>
    <div>
    <form method="POST" action="update_for.php">
    <table>
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" /></td>
        </tr>
        <tr>
            <td>School</td>
            <td><input type="text" name="school" /></td>
        </tr>
        <tr>
            <td>date début</td>
            <td><input type="date" name="start_date" /></td>
        </tr>
        <tr>
            <td>date fin</td>
            <td><input type="date" name="end_date" /></td>
        </tr>
        <tr>
            <td>Résumé</td>
            <td><input type="text" name="resume" /></td>
        </tr>
    </table>
    <button type="submit">Modifier</button>
    <a href="index.php">retour liste</a> 
</form>
    </div>
        
</body>

</html>