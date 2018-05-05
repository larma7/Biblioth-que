<?php
if(isset($_POST['login']) && isset($_POST['mdp']))
{	
	if ($_POST['login']!="babel" && $_POST['mdp']!="mdp")
	{
	include "authentifier.php";
	echo "<script>alert('The login and the password are both wrong');</script>";
	}
	else if($_POST['login']=="babel")
	{	if($_POST['mdp']=="mdp")
		{
		session_start();
		$_SESSION['babel'] = $_POST['mdp'];
		header('Location:BABEL.php');
		}
		else 
		{
		include "authentifier.php";
		echo "<script>alert('The password is wrong');</script>";
		}
	}
	else
	{
	include "authentifier.php";
    echo "<script>alert('The login is wrong');</script>";
	}
}
?>
