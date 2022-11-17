<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Dynamique</title>
    <style>
        table,thead{
            border:1px solid black;
            width:100%;
            background-color:orange;
           
        }

       
    </style>
</head>
<body>
<?php

//Tableaux Associatif

    $tab=[

        'Prenom' => 'Mehdi',
        'Nom' => 'Romdhani'

    ];


?>
   
   <table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeurs</th>         
            
        </tr>
     
    </thead>
       <tbody>
        
       
    <?php foreach ($tab as $key => $value) {
            echo "<tr>
            <td>$key</td>
            <td>$value</td>";
         }?>

    
        </tbody>
   </table>
    
</body>
</html>