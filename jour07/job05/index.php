<?php

//Declaration function w/ parametre

function occurences($str,$char){

    
 $count=0;

    for($i=0; isset($str[$i]); $i++){

        

            if($str[$i]===$char){

                
                    $count++; 
            }
    
                    
    

    }
    
return $count;



};

echo occurences("bonjour", "o");

