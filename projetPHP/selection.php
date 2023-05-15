
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<?php 
include './connection.php';
 ?>
 <style type="text/css">
 	*{
 		font-family: monospace;
 	}
 </style>
 <section>
 	<div class="row">
 	<div class="col-md-3"></div>
 	<div class="col-md-6"><center>
 	<form method="POST">
 		<div class="form-outline mb-4">
 		<label for=cherche>Cherchez un pays : </label><br>
 		<input type="text" name="cherche" style="width: 80%;" placeholder="cherchez ici..">
 		<button type="submit" name="submit" style="background-color: lightgreen;border: solid 1px black;border-radius: 30px;"><i class="fa fa-search" aria-hidden="true"></i></button>
 	</form>
 </div></center>
<?php 
echo '<ul>';
if(isset($_POST['submit'])){
$mot=$_POST['cherche'];	
$sql=mysqli_query($conn,"SELECT nom_en_gb From pays where nom_en_gb like '$mot%' ");
if(mysqli_num_rows($sql) > 0){
	while($search=mysqli_fetch_array($sql)){

	echo '<li>'.$search['nom_en_gb'].'</li>';
}
}else{
	echo "<center><u><b>AUCUN PAYS TROUVER!!</b></u></center>";
}
echo '</ul>';
}

 ?></div>
 </section>