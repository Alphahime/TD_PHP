<?php

$tableauChaines = array("Bonjour", "à", "tous", "les", "amis");

function concatenation($tableau) {
    
    $nouvelleChaine = implode(" ", $tableau);
    
  
    return $nouvelleChaine;
}


$nouvelleChaine = concatenation($tableauChaines);

echo "La nouvelle chaîne est : " . $nouvelleChaine;
?>
