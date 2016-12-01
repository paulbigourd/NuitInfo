<?php
	include('cdcc');
	
	if(isset($_POST['valider']))
		{	
			$_POST['titre'] = htmlspecialchars($_POST['titre']);
			$_POST['contenue'] = htmlspecialchars($_POST['contenue']);
			$_POST['urlimage'] = htmlspecialchars($_POST['urlimage']);
			
            
				setArticle($_POST['titre'],$_POST['contenue']);
			
		}
	
	require('../Views/');
?>