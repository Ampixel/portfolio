<?php
require '../../src/connection.php';
$bdd = Connection::connect();

if(isset($_POST['titre']) && isset($_POST['school']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['resume']) && isset($_POST['tjrs'])){
    $titre = checkInput($_POST['titre']);
    $school = checkInput($_POST['school']);
    $startDate = checkInput($_POST['start_date']);
    $endDate = checkInput($_POST['end_date']);
    $resume = checkInput($_POST['resume']);
    $tjrs = $_POST['tjrs'];

$requete = $bdd->prepare('INSERT INTO formation(title_for, school, start_date_for, end_date_for, resume_for, derniere_for) VALUE (?, ?, ?, ?, ?, ?)') OR die(print_r($bdd->errorInfo()));
$requete->execute(array($titre, $school, $startDate, $endDate, $resume, $tjrs));
header('location: ../');
exit();


}

function checkInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>