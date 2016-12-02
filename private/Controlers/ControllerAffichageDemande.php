<?php
	include('xf');
	
	$tab = getAllDemande();
	if(isset($_POST['ajouter']))
	{
		$_POST['demande']=htmlspecialchars($_POST['demande']);
		if(vfCategorie($_POST['demande']) == false)
		{
			setDemande($_POST['demande']);
		}
	}
	if(isset($_POST['supprimer']))
	{
		SuppresionDemande($_POST['demande']);
	}
	require('yvhv');
?>
	