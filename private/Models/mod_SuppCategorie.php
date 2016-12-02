<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->suppCategorie (PDO::ERRMODE_EXCEPTION);
function suppCategorie($nom)
{$query-> $bdd->prepare('DELETE id, nom from categories where nom=nom.categories');
    $query->execute(array($pseudo:));
    $tab = array();

    return $tab;

}