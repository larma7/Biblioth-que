<?php
require "ConnexionBD.php";
$conn=ConnexionBD::getInstance();
$req2=("Select * from categorie");
$res2=$conn->query($req2);
$details = $res2->fetchAll(PDO::FETCH_OBJ);
foreach($details as $detail)
{   foreach ($_POST as $ind=>$po) {

    if ($detail->nom == $ind)
    {
        $req3="DELETE FROM `categorie` where nom='".$detail->nom."' ";
        $conn->query($req3);
		$req4="DELETE FROM `appartient_cat` where nom_cat='".$detail->nom."' ";
        $conn->query($req4);
    }

}
}
header("Location:supprimerCategorie.php");
?>