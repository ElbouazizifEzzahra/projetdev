<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="images/png" href="1.png">
   <link rel="stylesheet" href="css1.css">
    <title>Connectez vous</title>
</head>
<body >
   <div class="bachground_de_compte">
    <!--<img src="ELLes/elles4.png" alt="image">-->
    <h1>ELLES</h1>
    <fieldset>
        <legend style="color: antiquewhite; text-decoration:underline; animation: backwards;"><strong>Connectez vous</strong> </legend>
    <form  method="POST" action="compte.php">
    <label for="a" ><strong>votre login</strong> </label>
    <input type="text" id="a"  name="login"  style="background-color:beige;">
    <label for="b"><strong>votre mot de passe</strong></label>
    <input type="password" id="b" name="pass"  required style="background-color: beige;">
    <a href="&"> <strong>Mot de passe oublié?</strong></a>
    <input id="boton" type="submit" value="se connecter" >
    <a href="creationduncompte.php"><strong>Pas de compte? Créer un ici</strong></a></form></fieldset></div>

    
    <?php
    include('fonction.php');
    if(isset($_POST['login']) and isset($_POST['pass']))
    {
        if($_POST['login']=='admin' and $_POST['pass']=='admin')
                 header ("location:compte2.php");
        else
        {
        
            echo "<center> Mot de passe incorrect</center>";
        }
    }
    
    ?>
</body>
</html>