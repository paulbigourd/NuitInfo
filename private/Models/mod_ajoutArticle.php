<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->ajoutArticle (PDO::ERRMODE_EXCEPTION);
function ajoutArticle($nom, $cont)
{$query-> $bdd->prepare('Insert into articles( id, titre, contenu) values ($id,$nom,$cont)');
    $query->execute(array('titre'=>$nom,'contenu'=>$cont));


}