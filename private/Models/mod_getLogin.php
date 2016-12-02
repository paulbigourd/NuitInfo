<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","iuts");
$db->getLogin (PDO::ERRMODE_EXCEPTION);
function getLogin()
{
    $query = $bdd->prepare('SELECT pseudo FROM benevoles, migrants ');
    $query->execute(array($pseudo));
    $tab = array();

    return $tab;
}
?>