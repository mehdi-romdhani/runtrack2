<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison_dans_la_Prairie_PHP</title>

    <style>
        form{

            border:1px solid black;
            display:flex;
            flex-direction:column;
            align-items:center;
            width:100%;
            background-color:orange;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="hauteur">Hauteur</label>
        <br>
        <br>
        <input type="text" name="hauteur" id="hauteur" placeholder="Entrez une valeur ">
        <br>
        <br>
        <label for="largeur">Largeur</label>
        <br>
        <br>
        <input type="text" name="largeur" id="largeur" placeholder="Entrez une valeur">
        <br>
        <br>
        <input type="submit" value="Try-me">
    </form>

<pre>
    <?php 
   
    
   $largeur = $_POST['largeur'];
   $hauteur = $_POST['hauteur'];
   
   echo "la largeur est de : ".$largeur;
   echo "<br>";
   echo "la hauteur de : ".$hauteur;
   echo "<br>";
   
   
   if ($_POST) {
       
      
      
    //declaration de variable pour pouvoir iteration   
    $k=0;
    $x = $largeur;
    //boucle toit
    
    for($i=0; $i<$hauteur; $i++){
        //boucle pour l'espace
        for($j=0; $j<$hauteur-$k; $j++){
                echo "&nbsp;";
        }

        //coté droit
        echo"/";

        //boucle largeur 
        for($l=0; $l<$largeur-$x; $l++){
                echo "_";
        }

        //coté gauche
        echo"\\";
        
        //saut de ligne pour base
        echo"<br>";       
        $k++;  
        $x = $x - 2;
    
    } 
    
    //boucle base
    for($h=0; $h<$hauteur; $h++){
        //affichage du coté gauche
            echo "|";
            //boucle espace entre coté gauche & droit
                for($z=0; $z<$largeur; $z++){

                    //affichage espace
                        echo"&nbsp;";

                }
        //affichage coté gauche fin tour de boucle espace
        echo "|";

        //saut de ligne pour fondation
        echo"<br>";

      
    }

    //coté gauche fondation
    echo "|";
    //boucle affichage underscore fondation
    for($e=0; $e<$largeur; $e++){
            echo "_";
    }
    
    //affichage coté gauche fondation
    echo"|";
          
}


    
    
    ?>
   </pre>
</body>
</html>