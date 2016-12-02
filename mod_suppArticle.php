<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->suppArticle (PDO::ERRMODE_EXCEPTION);
function suppArticle($titre)
{$query-> $bdd->prepare('DELETE contenu, url_image, titre,id from article where titre=article.titre');
    $query->execute(array($titre));
    $tab = array();

    return $tab;

}