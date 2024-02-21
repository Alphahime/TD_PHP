<?php

// Fonction pour effectuer une rotation à droite d'un tableau d'un certain nombre de positions
function rotation_droite($tableau, $nombre_positions) {
    $taille = count($tableau);
    
    // Cas ou le nombre de position est superieur à la taille du tableau
    $nombre_positions %= $taille;
    
    // Extractions des element à deplace
    $elements_deplacer = array_splice($tableau, $nombre_positions);
    
    // Insértion des éléments au debut du tableau
    array_splice($tableau, 0, 0, $elements_deplacer);
    
    return $tableau;
}


$tableau = array(1, 2, 3, 4, 5);
$nombre_positions = 3 ;


$tableau_rotated = rotation_droite($tableau, $nombre_positions);


echo "Tableau après rotation à droite de  positions : ",$nombre_positions;
print_r($tableau_rotated);




?>
