<?php 
require 'view_exp.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Modifier une expérience</title>
    <link rel="stylesheet" type="text/css" href="../design/default.scss">

</head>

<body>
    <h1>Modifier une expérience</h1>
    <div>
    <form method="POST" action="view_exp.php">
    <table>
        <tr>
            <td>Titre</td>
            <td><?php echo ' '.$item['title_exp'] ?></td></td>
        </tr>
        <tr>
            <td>School</td>
            <td><?php echo ' '.$item['company'] ?></td>
        </tr>
        <tr>
            <td>date début</td>
            <td><?php echo ' '.$item['start_date_exp'] ?></td>
        </tr>
        <tr>
            <td>date fin</td>
            <td><?php echo ' '.$item['end_date_exp'] ?></td>
        </tr>
        <tr>
            <td>Résumé</td>
            <td><?php echo ' '.$item['resume_exp'] ?></td>
        </tr>
    </table>
    <a href="update.php">Modifier</a>
    <a href="../index.php">retour liste</a> 
</form>
    </div>
        
</body>

</html>