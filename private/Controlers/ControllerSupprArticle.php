<?php
	include('cdcc');
	
	$tab = getAllTitre();
	
	if(isset($_POST['valider']))
		{	
			
			SuppresionArticle($_POST['title']);
			
		}
		
	require('../Views/views_Accueil');
?>