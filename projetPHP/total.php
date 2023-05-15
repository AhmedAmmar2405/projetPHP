<?php 
include './connection.php';

$total=mysqli_query($conn,"SELECT count(*) AS total FROM pays");
$resultat = mysqli_fetch_array($total);
echo $resultat['total'];
 ?>