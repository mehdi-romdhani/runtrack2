<?php


for($i=0; $i<=1000; $i++){
    if($i %2==0 && $i !=2){
        echo "<br>";
    }else if($i %3 ==0 && $i !=3){
        echo "<br>";
    }else if($i %5== 0 && $i !=5){
        echo "";
    }else{
        echo "<br>$i";
    }
}