<?php

require '../../src/connection.php';

if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}

$db = Connection::connect();
$requete = $db->prepare("SELECT * FROM experience WHERE experience.id_experience = ?");
$requete->execute(array($id));
$item = $requete->fetch();
Connection::disconnect();


function checkInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}