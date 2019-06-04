<?php
require '../../src/connection.php';

//On recupère l'id
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

if(!empty($_POST)){
    $bdd = Connection::connect();
    $requete = $bdd->prepare("DELETE FROM formation WHERE id_formation = ?");
    $requete->execute(array($id));
    header('location: ../');
    exit();

    Connection::disconnect();
    
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
