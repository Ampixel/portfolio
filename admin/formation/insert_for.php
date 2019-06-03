<?php
require '../../src/connection.php';
$bdd = Connection::connect();

if(isset($_POST['titre']) && isset($_POST['school']) && isset($_POST['start_date']) && isset($_POST['end_date'])&& isset($_POST['resume'])){
    $titre = $_POST['titre'];
    $school = $_POST['school'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $resume = $_POST['resume'];

$requete = $bdd->prepare('INSERT INTO formation(title_for, school, start_date_for, end_date_for, resume_for) VALUE (?, ?, ?, ?, ?)') OR die(print_r($bdd->errorInfo()));
$requete->execute(array($titre, $school, $startDate, $endDate, $resume));

header('location: ../');
exit();

}
?>