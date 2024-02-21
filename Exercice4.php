<?php

$chaines = array("Bonjour", "Formateur", "Simplon", "Coach");

function compter_voyelles($chaine) {

    $chaine = strtolower($chaine);
    
   
    $voyelles = array('a', 'e', 'i', 'o', 'u');
    
   
    $compteur = 0;
    
    // Pour parcourir chaque caractère de la cahine
    foreach (str_split($chaine) as $caractere) {
        // Pour vérifier si le caractère est une voyelle
        if (in_array($caractere, $voyelles)) {
            // Pour Incrémenter le compteur si c'est une voyelle
            $compteur++;
        }
    }
    

    return $compteur;
}

// Pour Parcourir le tableau et compter les voyelles pour chaque chaîne
foreach ($chaines as $chaine) {
    echo "Nombre de voyelles dans \"$chaine\" est: " . compter_voyelles($chaine) . "<br>";
}
?>
