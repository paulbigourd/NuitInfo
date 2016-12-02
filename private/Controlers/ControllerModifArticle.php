<?php
	include('cdcc');
	
	$tab = getAllTitre();
	
	if(isset($_POST['valider']))
		{	
			$_POST['titre'] = htmlspecialchars($_POST['titre']);
			$contenue = GetContenue($_POST['titre']);
			
		}
		if(isset($_POST['Valcontenue']))
			{
				$_POST['contenue'] = htmlspecialchars($_POST['contenue']);
				$Nouvcontenue = $_POST['contenue'];
				setContenue($_POST['titre'],$Nouvcontenue);
			}
	
	require('../Views/views_Accueil');
?>