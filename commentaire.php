<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ajouter un commentaire</title>
</head>
<body>
<?php 
include('fonction.php');
?>
    <div class="comment-form-container">
        <h2>Ajouter un commentaire</h2>
        <form action="commentaire.php" Method="post">
            <label for="nom">Prénom:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Nom:</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="commantaire">Commentaire:</label>
            <textarea id="commantaire" name="commantaire" rows="4" required></textarea>

            <button type="submit">Ajouter le commentaire</button>
        </form>
    </div>
    <style>
        body {
    font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.comment-form-container {
    background-color: #7e3131;
    background-color: rgba(100, 19, 19, 0.452);
    background-color:beige;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px black;
    width: 300px;
    text-align: center;
}

h2 {
    color: bisque;
    color: black;
    
}

label {
    display: block;
    margin: 10px 0 5px;
    color:burlywood;
}

input, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #aaaaaa;
    border-radius: 4px;
}

button {
    background-color: burlywood;
    color:black;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: brown;
}
    </style>
<?php
 
 if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['commantaire']) )
   {  if(!empty($_POST['nom']) and !empty($_POST['prenom'])and !empty($_POST['commantaire']) )
  { connexion();

 $sql2="insert into commentaires values('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['commantaire']."')";
 $bdd->exec($sql2);
 
 }
}
 
 ?>
</body>
</html>