<?php
	include('xf');
	
	$tab = getAllMessage();
	if(isset($_POST['ajouter']))
	{
		$_POST['message']=htmlspecialchars($_POST['message']);
		if(vfMessage($_POST['message']) == false)
		{
			setMessage($_POST['message']);
		}
	}
	if(isset($_POST['supprimer']))
	{
		SuppresionMessage($_POST['message']);
	}
	require('yvhv');
?>
	