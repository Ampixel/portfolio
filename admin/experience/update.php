<?php
session_start();
require 'update_exp.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modifier une expérience</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Modifier une expérience</h1>
    <div>
        <form method="POST" action="<?php echo 'update_exp.php?id=' . $id; ?>">
            <table>
                <tr>
                    <td>Titre</td>
                    <td><input type="text" name="titre" value="<?php echo ' ' . htmlspecialchars($item['title_exp']); ?>" /></td>
                </tr>
                <tr>
                    <td>School</td>
                    <td><input type="text" name="company" value="<?php echo ' ' . htmlspecialchars($item['company']); ?>" /></td>
                </tr>
                <tr>
                    <td>date début</td>
                    <td><input type="date" name="start_date" value="<?php echo substr($item['start_date_exp'], 0, 10); ?>" /></td>
                </tr>
                <tr>
                    <td>date fin</td>
                    <td><input type="date" name="end_date" value="<?php echo substr($item['end_date_exp'], 0, 10); ?>" /></td>
                </tr>
                <tr>
                    <td>Résumé</td>
                    <td><input type="text" name="resume" value="<?php echo ' ' . htmlspecialchars($item['resume_exp']); ?>" /></td>
                </tr>

            </table>
            <button type="submit">Modifier</button>
            <a href="../index.php">retour liste</a>
        </form>
    </div>

</body>

</html>