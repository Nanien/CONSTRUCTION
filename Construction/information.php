<?php 
	session_start();
	$db = new pdo ("mysql:host=localhost; dbname=Construction", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		
 		$req = $db->prepare('SELECT * FROM info WHERE id = ?');
 		$get = $_GET['id'];
	    $req->execute(array($get));
	 	$result = $req->fetch();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>INFORMATION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1" >
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="fontawesome/css/all.css">
    <link rel="stylesheet" href="information.css">
     
	 <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form id="form" method="get">

					<h3 class="text-center">INFORMATONS CONCERNANT LA CONSTRUCTION DE LA MAISON</h3><hr>

					<div class="form-group mt-5">
					    <label><h6>TYPE DE MAISON :</h6></label><?php echo ' ' . $result['type']; ?>
					</div>

					<div class="form-group">
					    <label><h6>DIMENSION EN m² : </h6></label><?php echo '  ' . $result['dimension']; ?>
					</div>

					<div class="form-group">
					    <label><h6>NOMBRE DE CHAMBRES : </h6></label><?php echo '  ' . $result['nbre de chambre']; ?>
					</div>

					<div class="form-group">
					    <label><h6>NOMBRE DE SALON : </h6></label><?php echo '  ' . $result['nbre de salon']; ?>
					</div>

					<div class="form-group">
					    <label><h6>PRIX EN CFA : </h6></label><?php echo '  ' . $result['prix']; ?>
					</div>

					<div class="form-group">
					    <label><h6>LOCALISATION : </h6></label><?php echo '  ' . $result['localisation']; ?>
					</div>

					<div class="form-group">
					    <label><h6>ARCHITECTE EN CHARGE DE LA MAISON : </h6></label><?php echo '  ' . $result['architecte']; ?>
					</div>

					<a class="btn btn-info" href="index.php">RETOUR</a>
				</form>
			</div>

			<div class="col-sm-6">
				<div class="row">
				<div class="thumbnail pr-5">
					<img src="<?php echo 'image/' . $result['photo']; ?>">
				</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>