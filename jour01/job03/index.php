
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


//declaration + affectations

/*variables
* de plusieurs
* types */


//variables nommée en camelCase

$etudiant= true; //type bool
$age= 29; //type int
$nomEtudiant = " Mehdi "; // type string
$anneeExp = 0.3; //type float 
$null //type null

?>
    

<!-- tableau -->

<table>

    <caption>Mon premier tableau de façon dynamique</caption>

                         <!-- ligne tableau -->
    <tr>
                        <!-- entete tableau -->
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </tr>

    <tr>
                    
        <td><?php echo gettype($etudiant)?></td>
        <td>Etudiant</td>
        <td><?php echo $etudiant ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($age)?></td>
        <td>Age</td>
        <td><?php echo $age ?></td>
    </tr>
     <tr>
        <td><?php echo gettype($nomEtudiant)?></td>
        <td>Nom de l'etudiant</td>
        <td><?php echo $nomEtudiant?></td>
     </tr>

     <tr>
        <td><?php echo gettype($anneeExp)?></td>
        <td>Années d'experience dev</td>
        <td><?php echo $anneeExp . " mois" ?></td>
     </tr>

     <tr>
        <td><?php echo gettype($null)?></td>
        <td>Alternance</td>
        <td><?php echo $null . "si cela est null <br>  le resultat de la variable <br> n'est pas afficher <br> car aucune affectation" ?></td>
     </tr>
   
</table>

</body>
</html>


