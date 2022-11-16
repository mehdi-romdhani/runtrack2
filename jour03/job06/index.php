<?php

//Assignation , Declaration & affectation $var
$str="Les choses que l'on possède finissent par nous posséder.";

//nb de caracteres
$nb_Caracteres=0;


//decrementation boucle
for($i=0; isset($str[$i]); $i--){
    echo "$str[$i]";
    $nb_Caracteres++;
       
}


echo "\n $nb_Caracteres";

