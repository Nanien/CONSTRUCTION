<?php
    $errorN = $errorP = $errorE = $errorP0 = $errorp = "";
	$db = new pdo ("mysql:host=localhost; dbname=Construction", "root", "");
	
		if (isset($_POST['valide']))
		{  
			if (empty($_POST['nom']))
			{
			    $errorN  = "Champ obligatoire Veuillez le remplir!!";
			}
			if (empty($_POST['prenom'])) 
			{
				$errorP = "Champ obligatoire Veuillez le remplir!!";
			}
			if (empty($_POST['email'])) 
			{
				$errorE = "Champ obligatoire Veuillez le remplir!!";
			}
			if (empty($_POST['pass0'])) 
			{
				$errorP0 = "Champ obligatoire Veuillez le remplir!!";
			}
			if (empty($_POST['pass1']) || $_POST['pass0'] != $_POST['pass1']) 
			{
				$errorp = "Mot De Passe Incorrect Veuillez Ressaisir!!";
			}						
	        else
		    {
		       $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        $query = $db->prepare("INSERT INTO users(nom, prenom, email, password) VALUES(?, ?, ?, ?)");
				$result = $query->execute([
				$_POST['nom'],
				$_POST['prenom'],
				$_POST['email'],
				$_POST['pass0']
				]);
				header("Location:connexion.php");		
			}	
	    }		
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>fornulaire d'inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1" >
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="fontawesome/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="inscription.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	 <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS -->
        <script src="js/jquery-3.3.1.js"></script>
        <!--<script src="js/jquery-3.2.1.slim.min.js"></script>-->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- <link rel="stylesheet" href="inscription.css"> -->
</head>
<body>
    <div class="container">

   	    <div class="row">

			<div class="col-lg-4 col-lg-offset-4">

			    <form id="form" method="post" action="" role="form" class="animated fadeInLeftBig">

	                <div class="row">

	                    <h3 class="text-center">Formulaire D'inscription</h3><hr>

				        <div class="form-group">
					        <label for="nom"><span>*</span> Nom</label>
					        <input type="text" id="nom"  name="nom" placeholder="Votre Nom" class="form-control">
					        <p class="comments"><?php echo $errorN; ?></p>  
				        </div>

				        <div class="form-group">
					        <label for="prenom"><span>*</span> Preom</label>
					        <input type="text" id="prenom"  name="prenom" placeholder="Votre Nom" class="form-control">
					        <p class="comments"><?php echo $errorP; ?></p>  
				        </div>

				        <div class="form-group">
					        <label for="email"><span>*</span> Email</label>
	     			        <input type="email" id="email"  name="email" placeholder="Votre Email" class="form-control">
	     			        <p class="comments"><?php echo $errorE; ?></p>
	                    </div>

                        <div class="form-group">
					        <label for="pass0"><span>*</span> Mot De Passe</label>
					        <input type="password" id="pass0"  name="pass0" placeholder="Votre Mot de Passe" class="form-control">
					        <p class="comments"><?php echo $errorP0; ?></p>
				        </div>

				        <div class="form-group">
					        <label for="pass1"><span>*</span> Confirmer Mot De Passe</label>
					        <input type="password" id="pass1"  name="pass1" placeholder="Confirmer Votre Mot De Passe" class="form-control">
					        <p class="comments"><?php echo $errorp; ?></p>
				        </div>

				        <div>
				        	<h3><strong style="color:red;">* Informations requises</strong></h3>
				        </div>

				        <button type="submit" name="valide" class="btn btn-success pull-left" id="valide" ><i class="fas fa-sign-in-alt"></i> SOUMETTRE</button>

                    </div>

	            </form>
			</div>      
	    </div>
	</div>
</body>
</html>