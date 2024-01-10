<?php
function connexion(){
    try{

        global $bdd;
        $bdd=new PDO ('mysql:host=localhost;dbname=monsite;charset=utf8','root','');
    }catch(Exception $e)
    {
        die('errer:'.$e->getMessage());

    }
}
?>