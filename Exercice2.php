<?php


function supprime_doublons($tab) {
    
    return array_unique($tab);
}


$tabDoublons = [1, 2, 3, 4, 2, 5, 6, 3, 7];


$tab_sans_doublons = supprime_doublons($tabDoublons);


echo "Tableau sans doublons : ";
print_r($tab_sans_doublons);

?>
