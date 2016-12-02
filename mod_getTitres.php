<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getTitres (PDO::ERRMODE_EXCEPTION);
function getTitres()
{
    $query = $bdd->prepare('SELECT titre FROM articles ORDER BY titre');
    $query->execute(array($titre));
    $tab = array();

    return $tab;
}
?>