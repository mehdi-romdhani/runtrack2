<?php 


$tab=[200, 204, 173, 98, 171, 404, 459];

foreach($tab as $t){
    if($t %2 == 0){
        echo "$t est pair <br>";
    }else{
        echo "$t est impaire <br>";
    };
};

