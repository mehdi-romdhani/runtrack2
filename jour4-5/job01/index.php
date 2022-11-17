



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>


        <form action="" method="get">
            <label for="nom">Nom</label>
            <br>
            <input type="text" placeholder="nom" name="nom"  id="nom">
            <br>
            <br>
            <label for="prenom">Prenom</label> 
            <br>
            <input type="text" placeholder="Prenom" name="prenom" id="prenom">
            <br>
            <br>
            <input type="submit" value="envoyer">
            <br>
        </form>

        <?php

//var_dump($_GET);

echo "<br>";
echo "mon nom est ".$_GET['nom'];
echo "<br>";
echo "mon prenom est ".$_GET['prenom'];
echo "<br>";

$nb_Argument=0;

foreach($_GET as $get){
    $nb_Argument++;
    
    
    echo $get;
}

echo "<br>";
echo "le nombre d'argument GET envoyer est ".$nb_Argument;

?>  

</body>

</html>