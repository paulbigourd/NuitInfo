<?php
	include('xf');
	
	$tab = getAllCategorie();
	if(isset($_POST['ajouter']))
	{
		$_POST['categorie']=htmlspecialchars($_POST['categorie']);
		if(vfCategorie($_POST['categorie']) == false)
		{
			setCategorie($_POST['categorie']);
		}
	}
	if(isset($_POST['supprimer']))
	{
		SuppresionCategorie($_POST['categorie']);
	}
	require('yvhv');
?>
	