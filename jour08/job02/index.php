<?php




if(isset($_COOKIE['nb_visite'])){

    
    $incrementation = $_COOKIE['nb_visite']+1;

    setcookie('nb_visite', $incrementation , time()+3660);

    //echo $_COOKIE['nb_visite'];

}else {
    
    echo "pas de cookies";
}


if(isset($_GET['reset'])){

    setcookie('nb_visite',1,time()+3660);
    header("Location: index.php");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB2</title>
</head>
<body>
    
    <form action="" method="GET">
        <label for="cookie">NOMBRE DE VISITE :)</label>
        <br>
        <br>
        <input type="submit" name="reset" value="RESET :)">
        <br>
        <br>
        <div><?=$_COOKIE['nb_visite']?></div>
    </form>


</body>
</html>