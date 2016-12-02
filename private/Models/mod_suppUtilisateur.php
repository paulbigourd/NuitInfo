<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->suppUtilisateur (PDO::ERRMODE_EXCEPTION);
function suppUtilisateur($pseudo)
{$query-> $bdd->prepare('DELETE pseudo, id, mdp, association, mail, localisation, is_admin, is_mod from benevoles where login=login.benevoles');
    $query->execute(array($pseudo));
    $tab = array();

    return $tab;

}