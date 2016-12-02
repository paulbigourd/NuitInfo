<?php
	include('../Models/');
	$error = true;
	if(isset($_POST['valider']))
		{	
			$_POST['login'] = htmlspecialchars($_POST['login']);
			$tab = gelAllLogin();
			for(int i = 0;i = sizeof($tab); i++)
			{
				if ($_POST['login'] == $tab[i])
				{
					error = false;
				}
			}
			if (error == false)
			{
				setModo($_POST['login']);
			}
			else
			{
				echo "login non existant";
			}
			
		}
	
	require('../Views/');
?>