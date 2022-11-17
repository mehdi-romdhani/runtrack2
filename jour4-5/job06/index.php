<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_paire_impaire</title>
    <style>
        form{
            border:1px solid black;
            background-color:orange;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="nom">Nom</label>
        <br>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prenom</label>
        <br>
        <input type="text" name="prenom" id="prenom">
        <br>
        <label for="nombre">Nombre</label>
        <br>        
        <input type="text" name="nombre" id="nombre">
        <br>
        <br>
        <input type="submit" value="Send_me">
    </form>

        <?php

            echo "<br>";

            if($_GET){

                if(!(int)$_GET['nombre']){

                    echo "rentrez un chiffre ou nombre bro :) ";
                }
                elseif((int)$_GET['nombre'] %2 == 0){

                    echo "Nombre paire :) : ".$_GET['nombre'];

                }else{
                    
                    echo "Nombre impaire :( ";
                }
            }
        ?>
   
</body>
</html>