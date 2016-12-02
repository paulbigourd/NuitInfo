<?php
$db=new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->moderateurTrue (PDO::ERRMODE_EXCEPTION);
function moderateurTrue($pseudo)
{$query-> $bdd->prepare('UPDATE benevoles SET is_moderateur=true where pseudo=pseudo.benevoles');
    $query->execute(array(is_moderateur=>is_moderateur));


}