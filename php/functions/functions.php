<?php

// crée une fonction qui permet de récupérer l'article avec en parametre son id

function getExperiences($experienceId){
    


    // tableau de données inclus
    include_once "./data/data.php";

    // Tableau de données 
    // avec les infos de l'article

    $poste = $experiences[$experienceId];

    return $poste;
}
