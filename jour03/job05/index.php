<?php

//Declaration + affection $var
$str="On n'est pas le meilleur quand on le croit mais quand on le sait";
 
//creation dictionnaire avec un tableau associatif
$dic = [
    'consonnes' =>  ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P","Q", "R", "S", "T", "V", "W", "X", "Z"],
    'voyelles' =>  ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y']
    ] ;

//affectation variable à 0 pour incrementer le nb de voyelles & consonnes
$nb_consonnes=0;
$nb_voyelles=0;


//print_r($dic);

//boucle sur le tableau associatif pour comparer les voyelles & consonne 
for($i=0; isset($str[$i]); $i++){
        //echo $str[$i];
        foreach($dic['voyelles'] as $voyelle){
            if($str[$i] == $voyelle){
                
                $nb_voyelles++;
            }
        }

        foreach($dic['consonnes'] as $consonne){
            if($str[$i] == $consonne){

                $nb_consonnes++;
            }
        }
};


/* echo "\n $nb_consonnes";
echo "\n $nb_voyelles";  */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <style>

        table,th,td{
            
            border:1px solid black;
            width:50%;
            
        }

    </style>
</head>
<body>

    <table>
            <caption>Tableau Consonnes/Voyelles</caption>
            <tr>
                <th>Nombres de Consonnes</th>
                <th>Nombres de Voyelles</th>
            </tr>
            <tr>
                <td><?= $nb_consonnes ?></td>
                <td><?= $nb_voyelles ?></td>
            </tr>
    </table>
    
</body>
</html>
