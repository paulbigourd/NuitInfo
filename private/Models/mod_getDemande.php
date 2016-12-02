<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getDemande (PDO::ERRMODE_EXCEPTION);
function getDemande()
{
    $query = $bdd->prepare('SELECT nom FROM demande');
    $query->execute(array($nom));
    $tab = array();

    return $tab;
}
?>