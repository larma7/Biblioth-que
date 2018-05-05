<?php
include "ajoutlivre.php";
$existe="SELECT * FROM livre WHERE (reference='".$_POST['ref']."')";
$que=$bd->query($existe);
$result=$que->fetchAll(PDO::FETCH_ASSOC);
if (count ($result)>0)
{echo '<script>alert("Reference deja dans la base");</script>';
}
else{
$fich= $_FILES['photo']['name'];
copy($_FILES['photo']['tmp_name'],'docs/'.$_FILES['photo']['name']);
$req="INSERT INTO livre (reference,titre,nbreLivreDispo,photo,synopsis) VALUES(:reference,:titre ,:nbre ,:photo,:synopsis)";
$res=$bd->prepare($req);
$res->execute(array('reference'=>$_POST ["ref"] ,'titre'=>$_POST ["titre"] ,'nbre'=>$_POST["nbr"] ,'photo'=>$fich,'synopsis'=>$_POST["synopsis"]) );

$req2=("Select * from categorie");
$res2=$bd->query($req2);
$details = $res2->fetchAll(PDO::FETCH_OBJ);
$ref=$_POST['ref'];
foreach($details as $detail)
{   foreach ($_POST as $ind=>$po) {

    if ($detail->nom == $ind)
    {
        $req3=("INSERT INTO appartient_cat VALUES (:ref, :nom)");
        $res=$bd->prepare($req3);
        $res->execute(array("ref"=>$ref,"nom"=>$detail->nom));
    }

}
}
}
?>