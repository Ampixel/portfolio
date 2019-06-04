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
    $company = checkInput($_POST['company']);
    $startDate = checkInput($_POST['start_date']);
    $endDate = checkInput($_POST['end_date']);
    $resume = checkInput($_POST['resume']);

    $requete = $bdd->prepare('UPDATE experience SET title_exp = ?, company = ?, start_date_exp = ?, end_date_exp = ?, resume_exp = ? WHERE  id_experience = ?') or die(print_r($bdd->errorInfo()));
    $requete->execute(array($titre, $company, $startDate, $endDate, $resume, $id));
    $item = $requete->fetch();

    header('location: ../');
    exit();

    Connection::disconnect();
} else {
    $bdd = Connection::connect();

    $requete = $bdd->prepare("SELECT * FROM experience WHERE id_experience = ?");
    $requete->execute(array($id));
    $item = $requete->fetch();
    // $titre = $item['title_for'];
    // $company = $item['company'];
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
