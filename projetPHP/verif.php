<?php 
include './connection.php';

if(isset($_POST['submit']))
{
	$pays=$_POST['pays'];
	$capitale=$_POST['capitale'];

    
    


	$population=$_POST['population'];
	if(empty($capitale))
	{
		header("location:ajout_cap_et_popu.php?error=capitale non saisie");
	}elseif (empty($population)) {
		header("location:ajout_cap_et_popu.php?error=Population non saisie");
	}elseif (!ctype_alpha($capitale)) {
		header("location:ajout_cap_et_popu.php?error=La capitale incorrecte");
        
    }else {
    	$addcap="UPDATE pays SET capitale ='$capitale',population ='$population' WHERE nom_en_gb ='$pays'";
    	mysqli_query($conn,$addcap);
    
    if(mysqli_affected_rows($conn) > 0) {
    echo '<script>alert("vous avez ajouté des nouveaux informations!");</script>'; 
    header("refresh:0;ajout_cap_et_popu.php");
} else {
     echo '<script>alert("informations non ajoutée!");</script>'; 
    header("refresh:0;ajout_cap_et_popu.php");
} 
	}}



 ?>