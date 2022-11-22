<?php 

//Declaration function w/ parametre 

function leetSpeak($str){

    for($i=0; isset($str[$i]); $i++){
        

        switch($str[$i]){

            case "A":
            case "a":
                echo "4";
                break;
            case "B":
            case "b":
                echo "8";
            case "E":
            case "e":
                echo "3";
            case "G":
            case "g":
                echo "6";
            case "L":
            case "l":
                echo "1";
            case "S":
            case "s":
                echo "5";
            case "T";
            case "t";
                echo "7";
            break;

            
        }

    }
};

leetSpeak("Ableton");

