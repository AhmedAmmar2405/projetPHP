<?php 
include './connection.php';
?>
<!DOCTYPE html>
<html>
<head>

	<title>Ajouter des informations sur les pays</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <style type="text/css">
   	.wrapper{
  width: 800px;
  padding: 2rem 0 1rem 0;
  margin: 50px auto;
  background: #fff;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}
form input,
form select,
form div 
{
  width: 85%;
  outline: none;
  border: none;
  background: #dfe9f5;
  padding: 12px 14px;
  margin-bottom: 10px;
  border-radius: 10px;
}
   </style>
</head>
<body>
	<section>
		<div class="row" style="background-color: black;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<center><h3 style="color: white;">Il existe <u><b><?php include './total.php' ?></b></u> pays</h3></center>
		</div><div class="col-md-3"><a href="./index.php" style="color:white;"><h7><b>RETOUR</b></h7></a></div>
		</div>
		
	</section>
	<div class="wrapper">
		<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6"><center>
	<h1><center>Ajouter des informations sur les pays</center></h1>
	<form  method="POST" action="verif.php">
		<?php if (isset($_GET['error'])){ ?>
      <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
      </div>
    <?php } ?>

		<label for="pays">Pays :</label>
		<select name="pays" class="form-select">
			<?php 
			$sql=mysqli_query($conn,"SELECT * FROM pays");
			while ($pays=mysqli_fetch_array($sql)) {
				echo '<option>'.$pays['nom_en_gb'].'</option>';
			}


			 ?>
			<!-- Ajoutez d'autres options pour les pays -->
		</select>
		
		
		<input type="text" name="capitale" placeholder="capitale">
		
		
		<input type="number" name="population" placeholder="population" min=1>
		<input type="submit" name="submit" style="background-color: lightgreen;">
	</form></div></center></div></div>

	
</body>
</html>


 