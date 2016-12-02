<?php
include('lib/modeles/mod_login.php');
$error = true;
if(isset($_POST['valider']))
{
	$_POST['login'] = htmlspecialchars($_POST['login']);
	$_POST['pwd'] = htmlspecialchars($_POST['pwd']);
	$tab = getAlllogin();
	for(int i = 0;i = sizeof($tab); i++)
			{
				if ($_POST['login'] == $tab[i])
				{
					$error = false;
				}
			}

	if ($error== false)
	{
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['rang'] = getRang($_SESSION['login']);

	}
	else
	{
		echo "connexion echouée";
	}
}

require('Views/pages/login.php');
?>
