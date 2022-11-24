<?php


setcookie('eleves','',time()+3600);

//var_dump($_COOKIE['eleves']);


echo "<br>";


//var_dump($_COOKIE['list']);

 if(isset($_GET['connexion'])){

    $_COOKIE['eleves'] = $_GET['prenom'];

    
    
}

echo "<br>";

if(isset($_COOKIE['eleves'])){
    
    echo "bonjour : " . $_COOKIE['eleves'];
    echo '<form action="" method="GET"> <input type="submit" name="deco" value="deco :)" > </form>';

}



/* foreach($_COOKIE['eleves'] as $key => $value){
    
 echo "<p>  $value  </p>";
}  */


//var_dump($_COOKIE['eleves']);
echo "<br>";
//print_r($_COOKIE['eleves']);



echo "<hr>";
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job04</title>
    </head>
    <body>

        <?php if(isset($_GET['deco'])){ 
        
            setcookie('eleves','',time()+3600);

            echo ' <form action="" method="GET">
            <label for="pre">Prenom</label>
            <br>
            <br>
            <input type="text" name="prenom" placeholder="votre prenom">
            <br>
            <br>
            <input type="submit" name="connexion" value="connexion">
        </form>';
         
        }?>
      
    </body>
    </html>