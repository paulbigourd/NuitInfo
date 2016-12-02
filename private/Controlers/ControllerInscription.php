<?php
	include('cdcc');
	
	if(isset($_POST['valmigrant']))
		{	
			$error = false;
			$_POST['login'] = htmlspecialchars($_POST['login']);
			$_POST['mdp'] = htmlspecialchars($_POST['mdp']);
			$_POST['localsation'] = htmlspecialchars($_POST['localisation']);
			$_POST['langue'] = htmlspecialchars($_POST['langue']);
			$_POST['age'] = htmlspecialchars($_POST['age']);
			$_POST['sexe'] = htmlspecialchars($_POST['sexe']);
			
			$tab = gelAllLogin();
			for(int i = 0;i = sizeof($tab); i++)
			{
				if ($_POST['login'] == $tab[i])
				{
					$error = true;
					echo "login deja existant";
				}
			}
			if ($_POST['age']<0) && ($_POST['age']>99)
			{
				$error = true;
				echo "age incorrect";
			}
			if ($error == false)
			{
				setMigrant($_POST['login'],$_POST['mdp'],$_POST['localisation'],$_POST['langue'],$_POST['age'],$_POST['sexe']);
			}
		}
		if(isset($_POST['valbenevole']))
		{	
			$error = false;
			$_POST['login'] = htmlspecialchars($_POST['login']);
			$_POST['mdp'] = htmlspecialchars($_POST['mdp']);
			$_POST['localsation'] = htmlspecialchars($_POST['localisation']);
			$_POST['asso'] = htmlspecialchars($_POST['asso']);
			$_POST['mail'] = htmlspecialchars($_POST['mail']);

			
			$tab = gelAllLogin();
			for(int i = 0;i = sizeof($tab); i++)
			{
				if ($_POST['login'] == $tab[i])
				{
					$error = true;
					echo "login deja existant";
				}
			}
			if ($_POST['mail'] != ^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$)
			{
				$error = true;
				echo "mail incorrect";
			}
			if (error == false)
			{
				setBenevole($_POST['login'],$_POST['mdp'],$_POST['asso'],$_POST['mail'],$_POST['localisation']);
			}
			
		}
	
	require('../Views/');
?>