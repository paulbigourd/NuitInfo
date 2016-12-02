<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->getTitres (PDO::ERRMODE_EXCEPTION);
function getContenu($titre)
{$query-> $bdd->prepare('select contenu, url_image from article where titre=article.titre');
    $query->execute(array($titre));
    $tab = array();

    return $tab;

}