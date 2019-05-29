<?php
require '../src/connection.php';
$bdd = Connection::connect();

if(isset($_POST['titre']) 
&& isset($_POST['company']) 
&& isset($_POST['start_date']) 
&& isset($_POST['end_date'])
&& isset($_POST['resume'])){
    $titre = $_POST['titre'];
    $company = $_POST['company'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $resume = $_POST['resume'];

$requete = $bdd->prepare('INSERT INTO experience(title_exp, company, start_date_exp, end_date_exp, resume_exp) VALUE (?, ?, ?, ?, ?)') OR die(print_r($bdd->errorInfo()));
$requete->execute(array($titre, $company, $startDate, $endDate, $resume));

header('location: ./');
exit();

}

?>


