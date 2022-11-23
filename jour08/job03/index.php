
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB04</title>
</head>
<body>
    <form action="" method="get">
        <label for="title">LIST_NAME</label>
        <input type="text" name="prenom">   <input type="submit" name="submit" value="Send_me :)">
        <input type="submit" name="reset" value="effacer">
    </form>
</body>
</html>

<?php

session_start();

if(isset($_GET["submit"])){

    $_SESSION['list'][] = $_GET["prenom"];

    foreach($_SESSION['list'] as $key => $value){

        echo "<ul>";
        echo "<li> bonjour  $value  </li>";
        echo "</ul>";

    }
}

if(isset($_GET['reset'])){

    session_destroy();
    header("Location". "index.php");

}




?>

