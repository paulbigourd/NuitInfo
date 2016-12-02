<?php
	include('private/Models/MOD_retArt');
	
	$tab = retArticles();
	
	require('private/Views/view_Accueil');
?>