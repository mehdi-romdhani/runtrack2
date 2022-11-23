<?php


session_start();

 
if(isset($_SESSION['visite'])){
    
    $_SESSION['visite']++;

}else{
    $_SESSION['visite']=1;
    
};



if(isset($_POST['reset'])){

    $_SESSION['visite']=0;
    header('Location: index.php');

};



var_dump($_SESSION);
echo "<br>";

echo "<br> <hr>";
print_r($_SESSION);

echo "<br> <hr>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>
<body>



    <form action="" method="POST">
        <label for="test">Compteur visite :) </label>
        <br>
        <br>
        <input type="submit" name="reset" value="reset">
        <br>
        <br>
        <div><p>Le nombre de visite est : </p><?= $_SESSION['visite'] ?></div>
    </form>
</body>
</html>