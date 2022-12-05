<?php

//connection bdd
include('connect.php');

session_start(); //set d'une session

//var_dump($_SESSION); // debug session 


if(isset($_POST['connect'])){//si notre le client appuie sur connect
    
    @$login = $_POST['login']; // variable global le @ evite d'afficher les erreurs
    @$passwd = $_POST['password'];// variable global le @ evite d'afficher les erreurs
    @$mess_error="";//variable vide pour afficher message derreur;
  
    
    if(isset($login) && empty($login)){ // condition si le champ login est definie & vide

        $error_log = "Veuillez entrez un login";// affiche message d'erreur
        
    }

    if(isset($passwd) && empty($passwd)){ // condition si le champ pwd est definie & vide 

        $error_pass ="Veuillez entre un passwd";//affiche message d'erreur

    }else{//si la condition est remplie

        $request = mysqli_query($connect,"SELECT login,password FROM utilisateurs WHERE login='$login' AND password='$passwd'");//requete bdd
        //$login_verif = mysqli_num_rows($request);//verification de ligne dans bdd
        // var_dump($login_verif);//debogage 
        
        if (mysqli_num_rows($request) == 1) {//condition sur pour comparer la premiere ligne de la  bdd 

            $user = mysqli_fetch_assoc($request);//
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            if ($user['login'] == 'admin') {

                $_SESSION['login'] = 'admin';

                header('location: admin.php');
                die(); 
                    
            }elseif($user['login'] == $login){

                $_SESSION['login'] = $login;
                
                header('location: profil.php');
                die();
            }
        }else{
            $mess_error= "Le nom d'utilisateur ou le mot de passe est incorrect.";
          }
          
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Roboto+Flex:opsz,wght@8..144,600&display=swap" rel="stylesheet">
    <title>Voyages_Connexion</title>
</head>
<body>


    <?php include('header.php'); ?>

   <div class="container-log">

        <form action="" method="POST" autocomplete="off"> 
            
            <br>
            <br>
            <label for="login">LOGIN</label><br>
            <input type="text" name="login" placeholder="login" id="login">
            <?php if(isset($login)){ ?>
            <p><?= @$error_log ?></p>
            <?php }?>
            <br>                   
            <label for="mtp">PASSWORD</label> <br>
            <input type="password" name="password" placeholder="Entrez un mot de passe"> <br>
            <?php if(isset($passwd)){ ?>
            <p><?= @$error_pass ?></p>
            <?php }?>
           
            <input type="submit" value="Se Connecter" name="connect">
            <?php if(isset($mess_error)){ ?>
             <span><p><?= @$mess_error ?></p></span>
            <?php } ?>
            
            
           


        </form>
   </div>

</body>
</html>