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
            <td><?php echo ' '.htmlspecialchars($item['title_exp']) ?></td></td>
        </tr>
        <tr>
            <td>Entreprise</td>
            <td><?php echo ' '.htmlspecialchars($item['company']) ?></td>
        </tr>
        <tr>
            <td>date début</td>
            <td><?php echo ' '.htmlspecialchars($item['start_date_exp']) ?></td>
        </tr>
        <tr>
            <td>date fin</td>
            <td><?php echo ' '.htmlspecialchars($item['end_date_exp']) ?></td>
        </tr>
        <tr>
            <td>Résumé</td>
            <td><?php echo ' '.htmlspecialchars($item['resume_exp']) ?></td>
        </tr>
    </table>
    <a href="update.php">Modifier</a>
    <a href="../index.php">retour liste</a> 
</form>
    </div>
        
</body>

</html>