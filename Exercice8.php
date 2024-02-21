<?php

function mediane_tab($tableau) {
    // Tri du tableau
    sort($tableau);
    
    // Calcul de la taille du tableau
    $taille = count($tableau);
    
    
    if ($taille % 2 == 0) {
        $indice1 = $taille / 2 - 1;
        $indice2 = $indice1 + 1;
        $median = ($tableau[$indice1] + $tableau[$indice2]) / 2;
    } else { 
        $indice = floor($taille / 2);
        $median = $tableau[$indice];
    }
    
    // Retourner la médiane
    return $median;
}


$tableau_entier = array(5, 2, 9, 1, 7);
$resultat = mediane_tab($tableau_entier);

echo "La médiane du tableau est : " . $resultat;
?>
