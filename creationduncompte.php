<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="images/png" href="1.png">
    <link rel="stylesheet" href="csscreaction.css">
    <title>Welcome</title>
</head>

<body>
<?php 
include('fonction.php');
?>
<div class="bachground_de_compte">


<h1>Elles</h1>


    <fieldset>
        <legend>Welcome joindre us</legend><br><br>
    <form action="creationduncompte.php" Method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br><br>


        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <label for="">Email</label>
        <input type="text" name="email" id=""><br><br>

        <label for="date">Date de naissance</label>
        <input type="date" name="date" id="date"><br><br>
        
        <label for="pass">Mot de passe</label>
        <input type="password" name="mdp" id="pass"> <br><br>
        
        <input type="submit" value="Rejoindre" id="input" >
        <input type="reset" value="Annuler" id="input"><br><br>
        <div class="social-login">
            <p>Ou Connectez-vous avec :</p>
            <a href="#" class="google-btn">Google</a>
            <a href="#" class="facebook-btn">Facebook</a>
        </div>
      
        
    </form>
    </fieldset></div>
    <?php
 
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and  isset($_POST['date']) and  isset($_POST['date']) )
    {
        if(!empty($_POST['nom']) and !empty($_POST['prenom'])and !empty($_POST['email']) and !empty($_POST['date']) and !empty($_POST['mdp']) )
     { connexion();
  
    $sql1="insert into site values('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['date']."','".$_POST['mdp']."')";
    $bdd->exec($sql1);
    echo'vous avez bien inscrire';
    }
}
    
    ?>

</body>
</html>