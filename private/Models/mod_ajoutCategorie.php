<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->ajoutCategorie (PDO::ERRMODE_EXCEPTION);
function ajoutCategorie($nom)
{$query-> $bdd->prepare('Insert into categories( id, nom) values ($id,$nom)');
    $query->execute(array('id'=>$id,'nom'=>$nom));


}