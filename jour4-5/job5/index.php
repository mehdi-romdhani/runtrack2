<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_post</title>
</head>
<body>

    <form action="" method="post">

        <label for="username">Username</label>
        <br>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" value="Send">
        
        
        
    </form>

    <?php

            //echo var_dump($_POST);
            //echo "<br>";
            if($_POST){
                
                if(($_POST['username'] === "john" || $_POST['username'] === "John") && ($_POST['password'] === 'rambo')){

                    echo "C'est pas ma guerre ";
        
                }else{
        
                    echo "Votre pire cauchemard";
        
                }
            }
        

    ?>

</body>
</html>