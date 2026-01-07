<?php require'Model/Modele.php';

function accueil() {
    $billets = getBillets();
    require 'View/vueAccueil.php'; 
}

function billet($idBillet) {
    $billet = getBillet($idBillet);
    $commentaires = getCommentaires($idBillet);
    require 'View/vueBillet.php';
}

function erreur($msgErreur) {
    require 'View/vueErreur.php';
}

?>