<?php 
include('connect.php');
session_start();

$request = mysqli_query($connect,"SELECT * FROM utilisateurs");

$tab_bbd= mysqli_fetch_all($request);

$mess_admin=$_SESSION['login'];

//var_dump($_SESSION['login']);

?>
<?php if ($_SESSION['login'] === "admin"){ ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
</head>
<body>

<div class="container_admin">
    <h1><?= "Bienvenue " . $mess_admin ?></h1>
    <div class="container_deco">
        <a href="logout.php">Logout</a>
        <br>
        <a href="profil.php">Modification du Profil</a>
    </div>
</div>

<table>
       <thead>
            <tr>
                <th>Login</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Password</th>
            </tr>
      </thead>

       <tbody>

       <?php foreach($request as $row):?>

        <?php echo "<tr>"; ?>
        <?php echo "<td> ".  $row['login'] . "</td>" ;?>
        <?php echo "<td> ".  $row['nom'] . "</td>" ;?>
        <?php echo "<td> ".  $row['prenom'] . "</td>" ;?>
        <?php echo "<td> ".  $row['password'] . "</td>" ;?>



        <?php echo "</tr>"?>
        <?php endforeach; ?>
        
        </tbody>


</table>

</body>
</html>

<?php } else{header("location: index.php");}?>