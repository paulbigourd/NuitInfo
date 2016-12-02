<?php
//fct qui retourne 6 dernier titres et contenu
$db= new PDO("mysql:host=localhost;port=3306;dbname=nuit_info","root","");
$db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function retArticles()
{

    $query = $db->prepare('SELECT titre,contenu,url_image FROM articles ORDER BY id DSC
LIMIT 6 '); // selection des 6 derniers articles
    $query->execute(array($id));
    $tab = array();

    while($data = $query->fetch())
    {
        $tab[] = $data;
    }
	
    return $tab;
}

?>