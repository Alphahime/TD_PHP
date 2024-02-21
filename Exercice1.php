<?php
  
//Exercice 1:

function calcule_produit($tab){
    $produit= 1;
    foreach($tab as $element)
    $produit = $element * $produit;
 return $produit;
}

$tab = [2, 3,3, 4, 5,6];

$produit = calcule_produit($tab);

echo"Le produit est valeurs du tableau est :" ,$produit;






?>