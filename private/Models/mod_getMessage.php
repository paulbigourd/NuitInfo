<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getMessage (PDO::ERRMODE_EXCEPTION);
function getMessage()
{
    $query = $bdd->prepare('SELECT message FROM proposition, demande');
    $query->execute(array($message));
    $tab = array();

    return $tab;
}
?>