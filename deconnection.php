<?php 
session_start(); /* INITIALISE LA SESSION */

session_unset(); /** DESACTIVEr LA SESSION */

session_destroy(); /** DETRUIRE LA SESSION */

setcookie('log', '', time()-3444, '/', null, false, true);

header('location: ./'); /** ACCUEIL NON CONNECTER */
exit();