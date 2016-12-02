<?php
	include('xf');
	
	$tab = getAllPropo();
	if(isset($_POST['ajouter']))
	{
		$_POST['propo']=htmlspecialchars($_POST['propo']);
		if(vfCategorie($_POST['propo']) == false)
		{
			setDemande($_POST['propo']);
		}
	}
	if(isset($_POST['supprimer']))
	{
		SuppresionPropo($_POST['propo']);
	}
	require('yvhv');
?>
	