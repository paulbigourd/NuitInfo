<?php
	include('cdcc');
	
	$tab = getAllModo();
	
	if(isset($_POST['valider']))
		{	
			
			SuppresionModo($_POST['login']);
			
		}
		
	require('../Views/views_Accueil');
?>