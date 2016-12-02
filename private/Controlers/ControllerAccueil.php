<?php
	include('private/Models/MOD_retArt.php');
	
	$tab = retArticles();
	
	require('private/Views/view_Accueil.php');
?>