<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->modifCategorie (PDO::ERRMODE_EXCEPTION);
function modifCategorie($nom,$nouv)
{$query-> $bdd->prepare('UPDATE categories SET nom=nouv where nom=nom.categories');
    $query->execute(array('nom'=>$nom));


}