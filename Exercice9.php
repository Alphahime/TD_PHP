<?php

function frequence_carct($chaine) {
    $frequences = array();
    
    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        $caractere = $chaine[$i];
        
        
        if (isset($frequences[$caractere])) {

            $frequences[$caractere]++;
        } else {
            
            $frequences[$caractere] = 1;
        }
    }
    
    return $frequences;
}

$chaine = "Bonjour tout le monde";

$resultat = frequence_carct($chaine);


echo "Fréquence de chaque caractère dans \"$chaine\": <br>";
foreach ($resultat as $caractere => $frequence) {
    echo "$caractere : $frequence <br>";
}
?>
