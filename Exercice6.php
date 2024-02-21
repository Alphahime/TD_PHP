<?php

function sans_doublons($tableau) {

    $occurrences = array_count_values($tableau);
    
  
    $element_sansdoub = array();
    
  
    foreach ($tableau as $element) {
     
        if ($occurrences[$element] == 1) {
            
            $element_sansdoub[] = $element;
        }
    }
  
    return  $element_sansdoub;
}


$tab_entier = array(1, 2, 3, 4, 2, 5, 6, 6, 7, 8, 9, 9);
$resultat = sans_doublons($tab_entier);

echo "Les éléments sans doublons sont : ";
foreach ($resultat as $element) {
    echo $element . " ";
}
?>
