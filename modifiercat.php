<?php
require "ConnexionBD.php";
$conn=ConnexionBD::getInstance();
$req="UPDATE categorie SET nom='".$_POST["nom"]."' WHERE nom='".$_POST["radiobox"]."'";
$conn->query($req);
header("Location:modifiercategorie.php");
?>