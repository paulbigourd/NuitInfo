<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","iut");
$db->ajoutMigrant (PDO::ERRMODE_EXCEPTION);
function ajoutMigrant($id,$pseudo,$mdp,$localisation,$langue,$age,$sexe)
{$query-> $bdd->prepare('Insert into migrants( id,pseudo,mdp,localisation,langue,age,sexe) values ($id,$pseudo,$mdp,$localisation,$langue,$age,$sexe)');
    $query->execute(array('id'=>$id,'pseudo'=>$pseudo,'mdp'=>$mdp,'localisation'=>$localisation,'langue'=>$langue,'age'=>$age,'sexe'=>$sexe));


}