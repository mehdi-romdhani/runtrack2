<?php

for($i=0; $i<=100; $i++){

    if($i %3 ==0 && $i %5 ==0){

        echo "<br> fizzbuzz <br>";

    }else if($i % 3 == 0){

        echo "<br>fizz <br>";

    }else if($i %5 == 0){

        echo "<br>buzz <br>";

    }else{

        echo "<br>le nombre est $i";
        
    }
}