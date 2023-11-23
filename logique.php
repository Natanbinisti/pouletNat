<?php
require_once "templates.php";
require_once "authentification.php";


if(!$isLoggedIn){
    $content = $loginForm;

}else{
    $content = "oui tu a reussi";

   // $content = afficheUnPlat();

}

