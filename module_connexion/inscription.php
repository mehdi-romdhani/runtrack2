<?php


$connect= mysqli_connect("localhost","root","","moduleconnexion");

if(isset($_POST['submit'])){
    
    $log=$_POST['login'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $pass=$_POST['password'];
    $pass2=$_POST['password2'];


    
    $request = mysqli_query($connect,"SELECT `login` FROM utilisateurs ");
    
    $recup_tab = mysqli_fetch_all($request);
    //var_dump($recup_tab);
    
    
        
            foreach ($recup_tab as $user){
                if ($user[0] === $log){
                    $mess_login = "le login existe deja";
                    break;
                }
            }
    
            if(isset($log) && empty($log)){
                $error_log = "Veuillez rentrez un log";
            }
            
            if(isset($nom) && empty($nom)){
                $error_nom = "Veuillez entrez un nom";
            }
        
            if(isset($prenom) && empty($prenom)){
                $error_prenom = "Veuillez entrez un prenom";
            }
    
            if (empty($pass)){
                $error_pass = " Veuillez saisir un mot de passe";
            }              
            elseif($pass != $pass2 ){
                                          
                $error_pass= "Veuillez rentrez le meme mot de passe ";         
                   //check connection done ! 
                   
                   
                   //redirection 
                   
                   
                }else{
                $request = $connect->query("INSERT INTO utilisateurs (login, nom, prenom, password) VALUES ('$log','$nom','$prenom','$pass')");
                
                
                 header("refresh:2; url=connexion.php");
                 die(); 
                

                
            }
            
        }


?>



<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../module_connexion/style.css">
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto+Flex:opsz,wght@8..144,600&display=swap" rel="stylesheet">
    <title>Voyages_Connexion</title>
</head>
<body>


    <?php include('header.php'); ?>

   <div class="container-sign">

        <form action="" method="POST" autocomplete="off"> 

             <br>
             <br>
            <label for="login">Login</label><br>
            
            <input type="text" name="login" placeholder="login"><br>
            <?php if(isset($error_log)){?>
                <span><p><?= $error_log?></p></span>
            <?php }else{ ?>
            <p><?= @$mess_login ?></p>
            <?php } ?>
          

            <label for="nom">Nom</label> <br>
            <input type="text" name="nom" id="nom" placeholder="votre nom"> <br>
            <?php if(isset($error_nom)){?>
                <span><p><?= $error_nom?></p></span>
            <?php } ?>

            <label for="prenom">Prenom</label> <br>
            <input type="text" name="prenom" id="prenom" placeholder="votre prenom"> <br>
            <?php if(isset($error_prenom)){?>
                <span><p><?= $error_prenom?></p></span>
            <?php } ?>

            <label for="mtp">Password</label> <br>
            <input type="password" name="password" placeholder="Entrez un mot de passe"> <br>


            <label for="confirm">Confirmation Password</label><br>
            <input type="password" name="password2"><br>

            <?php if(isset($error_pass)){?>
                <span><p><?= $error_pass?></p></span>
            <?php } ?>
            <br>
                

            <input type="submit" name="submit" value="S'inscrire" class="btn btn-primary">


        </form>
   </div>

</body>
</html>