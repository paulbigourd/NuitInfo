<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->modifArticle (PDO::ERRMODE_EXCEPTION);
function modifArticle($nom,$nouv)
{$query-> $bdd->prepare('UPDATE articles SET contenu=nouv where nom=nom.articles');
    $query->execute(array('contenu'=>$nouv));


}