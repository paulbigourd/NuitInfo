<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->suppMigrant (PDO::ERRMODE_EXCEPTION);
function suppMigrant($pseudo)
{$query-> $bdd->prepare('DELETE pseudo, id, mdp, localisation, langue, age, sexe from benevoles where login=login.mignants');
    $query->execute(array($pseudo:));
    $tab = array();

    return $tab;

}