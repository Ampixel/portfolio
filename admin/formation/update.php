<?php
session_start();
require 'update_for.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modifier une formation</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Modifier une formation</h1>
    <div>
        <form method="POST" action="<?php echo 'update_for.php?id=' . $id; ?>">
            <table>
                <tr>
                    <td>Titre</td>
                    <td><input type="text" name="titre" value="<?php echo ' ' . $item['title_for']; ?>" /></td>
                </tr>
                <tr>
                    <td>School</td>
                    <td><input type="text" name="school" value="<?php echo ' ' . $item['school']; ?>" /></td>
                </tr>
                <tr>
                    <td>date début</td>
                    <td><input type="date" name="start_date" value="<?php echo ' ' . $item['start_date_for']; ?>" /></td>
                </tr>
                <tr>
                    <td>date fin</td>
                    <td><input type="date" name="end_date" value="<?php echo ' ' . $item['end_date_for']; ?>" /></td>
                </tr>
                <tr>
                    <td>Résumé</td>
                    <td><input type="text" name="resume" value="<?php echo ' ' . $item['resume_for']; ?>" /></td>
                </tr>

            </table>
            <button type="submit">Modifier</button>
            <a href="../index.php">retour liste</a>
        </form>
    </div>

</body>

</html>