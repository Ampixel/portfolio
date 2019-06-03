<?php

require '../../src/connection.php';

if(!empty($_GET['id']))
{
    $id = checkInput($_GET['id']);
}

$db = Connection::connect();
$requete = $db->prepare("SELECT * FROM formation WHERE formation.id_formation = ?");
$requete->execute(array($id));
$item = $requete->fetch();
Connection::disconnect();


function checkInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}