<?php
	include('cdcc');
	
	if(isset($_POST['valider']))
		{	
			$_POST['title'] = htmlspecialchars($_POST['title']);
			$_POST['body'] = htmlspecialchars($_POST['body']);
			$_POST['img'] = htmlspecialchars($_POST['img']);
			
            
				setArticle($_POST['titre'],$_POST['contenue']);
			
		}
	
	require('../Views/');
?>