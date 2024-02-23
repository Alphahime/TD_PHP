<?php

function rotation_droite($tableau, $nombre_positions) {
    $taille = count($tableau);
    
    $nombre_positions %= $taille;
    
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
