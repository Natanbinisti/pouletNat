<?php
$isLoggedIn = false;

$usernameBon = "faker";
$passwordBon = "azirmid";

if (isset($_POST ['username'])){
    $usernameUtilisateur = $_POST['username'];
    if ($usernameUtilisateur == $usernameBon)
        if (isset($_POST ['password'])){
            $passwordUtilisateur = $_POST ['password'];
            if ($passwordUtilisateur == $passwordBon){
                $isLoggedIn = true;
            }
        }
}
if (isset($_POST['pouletId'])){
    $pageProduit = true;
    $idPoulet = $_POST['pouletId'];


}
// logique de connection   $_POST etc etc

//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true