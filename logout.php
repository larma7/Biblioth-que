<?php
{
	session_start();
	unset($_SESSION['babel']);
    session_destroy();
    header('Location: authentifier.php');
}
?>