<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","iut");
$db->moderateurFalse (PDO::ERRMODE_EXCEPTION);
function moderateurFalse($pseudo)
{$query-> $bdd->prepare('UPDATE benevoles SET is_moderateur=false where pseudo=pseudo.benevoles');
    $query->execute(array(is_moderateur=>is_moderateur));


}