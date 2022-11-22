<?php

//Declaration function w/ 3 Parametres

function calc(int $a, string $operation, int $b){

    //Switch condition pour calculs 

    switch($operation){
        case "+":
            echo "le resultat est : " . $a + $b;
        break;

        case "-";
            echo "le resultat est : " . $a - $b ;
        break;

        case "*":
            echo "le resultat est : " . $a * $b;
        break;

        case "/":
            echo "le resultat est : " . $a / $b;
        
        case "%":
            echo "le resultat est : " . $a % $b;
        break;

        default:

            echo "vive les calcules :)";
    }

    
};

//Appel de la function 

calc(50,"*",7);

