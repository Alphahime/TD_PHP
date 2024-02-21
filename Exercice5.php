<?php

$tab1 = array(1, 2, 3, 4, 5);
$tab2 = array(3, 4, 5, 6, 7);


function element_commun($tab1, $tab2) {

    $elementsCommuns = array_intersect($tab1, $tab2);
    
    //  On retourne aux éléments communs
    return $elementsCommuns;
}


$communs = element_commun($tab1, $tab2);

// Affichage des éléments communs
echo "Les éléments communs sont : ";
foreach ($communs as $element) {
    echo $element . " ";
}
?>
