<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->modifContenu (PDO::ERRMODE_EXCEPTION);
function modifContenu($titre,$nouv)
{$query-> $bdd->prepare('UPDATE articles SET contenu=nouv where titre=titre.articles');
    $query->execute(array(contenu=>contenu));


}