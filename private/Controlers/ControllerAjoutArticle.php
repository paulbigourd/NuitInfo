<?php
	include('../Models/mod_ajoutArticle.php');
	
	if(isset($_POST['valider']))
		{	
			$_POST['title'] = htmlspecialchars($_POST['title']);
			$_POST['body'] = htmlspecialchars($_POST['body']);
			$_POST['img'] = htmlspecialchars($_POST['img']);
			
            
				ajoutArticle($_POST['titre'],$_POST['contenue']);
			
		}
	
	require('../Views/view_AjoutArticle.php');
?>