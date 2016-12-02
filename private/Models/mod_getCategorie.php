<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getCategorie (PDO::ERRMODE_EXCEPTION);
function getCategorie ()
{
    $query = $bdd->prepare('SELECT nom FROM categorie');
    $query->execute(array($titre));
    $tab = array();

    return $tab;
}
?>