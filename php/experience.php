<?php
include __DIR__."/functions/functions.php";


// opérateur coalescent de null
// $experienceId = $_GET['id'] ?? 1;


//équivalent du code plus haut
// if(isset($_GET['id'])){
//     $experienceId = $_GET['id'];
// }else{
//     $experienceId = 1;
// }

// Gestion du cas ou l'id n'est pas renseigné et le cas ou l'id est supérieur à 6
$experienceId = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT,["options" => ["min_range"=>0, "max_range" => 6]]);

if(!is_int($experienceId)){
    $experienceId = 1;
}

// ici
$poste = getExperiences($experienceId);

                                                                                                                                                                                                                                                  

require_once __DIR__.'/templates/experience.tpl.php';

