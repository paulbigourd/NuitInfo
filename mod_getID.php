<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getID (PDO::ERRMODE_EXCEPTION);
function getID()
{
    $query = $bdd->prepare('SELECT id FROM articles ORDER BY id');
    $query->execute(array($id));
    $tab = array();

    return $tab;
}
?>