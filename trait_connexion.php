<?php 
session_start();

if(isset($_SESSION['connect'])){
    header('location: admin/index.php');
    exit();
}

require('src/connection.php');
$bdd = Connection::connect();

if(!empty($_POST['email']) && !empty($_POST['password'])){

    //VARIABLE
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //CRYPTER LE MDP
    //$password = "aq1".sha1($password."09")."31";

    //VERIFICATION DU MDP AVEC EMAIL
    $req = $bdd->prepare('SELECT * FROM user WHERE email = ?');
    $req->execute(array($email));

    while($user = $req->fetch()){
        if($password == $user['password']){
            $_SESSION['connect'] = 1;
            $_SESSION['email'] = $user['email'];
            header('location: admin/index.php');
            exit();
        }
    } 
    
    header('location: page_connexion.php?error=1');
    exit();
}

?>