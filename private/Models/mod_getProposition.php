<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getProposition (PDO::ERRMODE_EXCEPTION);
function getProposition()
{
    $query = $bdd->prepare('SELECT nom FROM proposition');
    $query->execute(array($nom));
    $tab = array();

    return $tab;
}
?>