<?php

//Declaration fonction + argument

function str(bool $jour){


    if($jour === true){
        
         echo "Bonjour world";
         

    }
    elseif($jour === false){

        echo "Bonsoir world";
    }

    
};

str(true);