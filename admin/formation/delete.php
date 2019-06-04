<?php
// DELETE
session_start();
require 'delete_for.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Supprimer une formation</title>
    <link rel="stylesheet" type="text/css" href="../../design/default.scss">

</head>

<body>
    <h1>Supprimer une formation</h1>
    <div>
    <form method="POST" action="<?php echo 'delete_for.php?id='.$id;?>">
    <p>Êtes-vous sûr de vouloir supprimer ?</p>
    <button type="submit">Oui</button>
    <a href="../index.php">Non</a>
</form>
    </div>
        
</body>

</html>