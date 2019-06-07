<?php
require 'view_for.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <title>afficher une formation</title>
    <link rel="stylesheet" type="text/css" href="../design/default.scss">

</head>

<body>
    <h1>Votre formation</h1>
    <div>
        <form method="POST" action="view_for.php">
            <table>
                <tr>
                    <td>Titre</td>
                    <td><?php echo ' ' . htmlspecialchars($item['title_for']) ?></td>
                </tr>
                <tr>
                    <td>School</td>
                    <td><?php echo ' ' . htmlspecialchars($item['school']) ?></td>
                </tr>
                <tr>
                    <td>date début</td>
                    <td><?php echo substr($item['start_date_for'], 0, 10); ?></td>
                </tr>
                <tr>
                <tr>
                    <td>Toujours en cours</td>
                    <td><?php echo $item['derniere_for']; ?></td>
                </tr>
                    <td>date fin</td>
                    <td><?php echo substr($item['end_date_for'], 0, 10); ?></td>
                </tr>
                <tr>
                    <td>Résumé</td>
                    <td><?php echo ' ' . htmlspecialchars($item['resume_for']) ?></td>
                </tr>
            </table>
            <a href="update.php">Modifier</a>
            <a href="../index.php">retour liste</a>
        </form>
    </div>

</body>

</html>