<?php
	include('cdcc');
	
	$tab = getAllategorie();
	
	if(isset($_POST['valider']))
		{	
			$_POST['categorie'] = htmlspecialchars($_POST['categorie']);
			$categorie = GetCategorie($_POST['categorie']);
			
		}
		if(isset($_POST['Valcontenue']))
			{
				$_POST['noucategorie'] = htmlspecialchars($_POST['categorie']);
				$nouvcategorie = $_POST['noucategorie']
				setCategorie($_POST['categorie'],$nouvcategorie);
			}
	
	require('../Views/views_Accueil');
?>