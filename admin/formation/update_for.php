<?php
require '../../src/connection.php';

//On recupère l'id
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

//si le post est vide
if (!empty($_POST)) {
    $bdd = Connection::connect();
    $titre = checkInput($_POST['titre']);
    $school = checkInput($_POST['school']);
    $startDate = checkInput($_POST['start_date']);
    $endDate = checkInput($_POST['end_date']);
    $resume = checkInput($_POST['resume']);
    $tjrs = $_POST['tjrs'];
    if(!empty($_POST['tjrs'])){
        $value = 1;
    }else{
        $value = 0;
    }

    $requete = $bdd->prepare('UPDATE formation SET title_for = ?, school = ?, start_date_for = ?, end_date_for = ?, resume_for = ?, derniere_for = ? WHERE  id_formation = ?') or die(print_r($bdd->errorInfo()));
    $requete->execute(array($titre, $school, $startDate, $endDate, $resume, $tjrs, $id));

    header('location: ../');
    exit();

    Connection::disconnect();
} else {
    $bdd = Connection::connect();

    $requete = $bdd->prepare("SELECT * FROM formation WHERE id_formation = ?");
    $requete->execute(array($id));
    $item = $requete->fetch();

    Connection::disconnect();
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
