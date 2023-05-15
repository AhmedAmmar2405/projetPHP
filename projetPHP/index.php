<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
	<title></title>
</head>
<body>
	<section>
		<div class="row" style="background-color: black;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
			<center><h3 style="color: white;">Il existe <u><b><?php include './total.php' ?></b></u> pays</h3></center>
		</div><div class="col-md-3"><a href="./ajout_cap_et_popu.php" style="color:white;"><h7><b>Inserer des information</b></h7></a></div>
		</div>
		
	</section>
	<section>

<?php include './selection.php' ?>	



</section>
</body>
</html>