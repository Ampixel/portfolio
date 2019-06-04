<?php
require '../../src/connection.php';

//On recupère l'id
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

// SI POST n'est pas vide -> DELETE
if(!empty($_POST)){
    $id = checkInput($_POST['id']);
    $bdd = Connection::connect();
    $requete = $bdd->prepare("DELETE FROM experience WHERE id_experience = ?");
    $requete->execute(array($id));

    header('location: ../index.php');
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
