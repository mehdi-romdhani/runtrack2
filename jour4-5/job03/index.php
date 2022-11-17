<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Post</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Nom</label>
        <br>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prenom</label>
        <br>
        <input type="text" name="prenom" id="prenom">
        <br>
        <input type="submit" value="Send_me">
    </form>

    <?php

        //Var pour incrementer le nb d'arguments
        $nb_Argument=0;


        echo "<br><hr>";
        var_dump($_POST);
        echo "<br>";

        echo "Mon nom est ".$_POST['nom']."<br>";
        echo "Mon prenom est ".$_POST['prenom']."<br>";

            foreach($_POST as $key => $value){
                $nb_Argument++;
                echo "la clef est ".  $key  .' '."est la valeur est : " . $value .'<br>';
            }

        echo "<br>";
        echo "nb darguments : " . $nb_Argument;
        

    ?>
</body>
</html>