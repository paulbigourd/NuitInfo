<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->ajoutMigrant (PDO::ERRMODE_EXCEPTION);
function ajoutMigrant($id,$pseudo,$mdp,$localisation$association,$mail,)
{$query-> $bdd->prepare('Insert into benevoles( id,pseudo,mdp,localisation,association,mail,is_admin,is_mod) values ($id,$pseudo,$mdp,$localisation,$association,$mail,false,false)');
    $query->execute(array('id'=>$id,'pseudo'=>$pseudo,'mdp'=>$mdp,'localisation'=>$localisation,'association'=>$association,'mail'=>$mail));


}