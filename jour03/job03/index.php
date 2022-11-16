<?php

//Declare & affectation variable

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelle=['a','e','i','o','u','y','A','E','I','O','U','Y'];


for($i=0; isset($str[$i]); $i++){        
    for($j=0; isset($voyelle[$j]); $j++){
        if($str[$i] == $voyelle[$j]){
            echo $str[$i];
        };
    };
   
   
        

    
};