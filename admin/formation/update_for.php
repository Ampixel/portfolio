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

    $requete = $bdd->prepare('UPDATE formation SET title_for = ?, school = ?, start_date_for = ?, end_date_for = ?, resume_for = ? WHERE  id_formation = ?') or die(print_r($bdd->errorInfo()));
    $requete->execute(array($titre, $school, $startDate, $endDate, $resume, $id));
    $item = $requete->fetch();

    header('location: ../');
    exit();

    Connection::disconnect();
} else {
    $bdd = Connection::connect();

    $requete = $bdd->prepare("SELECT * FROM formation WHERE id_formation = ?");
    $requete->execute(array($id));
    $item = $requete->fetch();
    // $titre = $item['title_for'];
    // $school = $item['school'];
    // $startDate = $item['start_date_for'];
    // $endDate = $item['end_date_for'];
    // $resume = $item['resume_for'];

    Connection::disconnect();
}

function checkInput($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
