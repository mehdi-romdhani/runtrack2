<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_post</title>
    <style>
        table,thead,th,tbody,td{
            border:1px solid black;
            width: 50%;
            background-color:orange;
        }
    </style>
</head>
<body>
  

    <form action="" method="post">
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

        <br>

    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($_POST as $key => $value){
                echo "<tr>
                <td>$key</td>
                <td>$value</td>
                    </tr>";
            }?>

        </tbody>
    </table>
</body>
</html>