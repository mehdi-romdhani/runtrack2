<?php

//boucle for

for($i=0; $i<=100; $i++){

    if($i>=0 && $i<=20){

        echo "<i> le nombre  est $i </i> ";
        echo "<br>";
               

    }else if($i==42){

        echo " <br> ====================>LA PLATEFORME" ;

    }else if($i>=25 && $i<=50){

        echo "<br><u>le nombre est $i </u> ";
        
    }else{

        echo "<br>le nombre est $i";
    }

}