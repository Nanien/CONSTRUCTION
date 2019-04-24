<?php 
	session_start();
	$message = $messageE = "";
	$db = new pdo ("mysql:host=localhost; dbname=Construction", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	if (isset($_POST['valider'])) 
	{
		$username = $_POST['email'];
		$password = $_POST['pass0'];

		if (empty($username) || empty($password)) 
		{
			$message = "Tous les champs sont requis!!";
		}
		else
		{
			$query = $db->prepare('SELECT email, password FROM users WHERE email=? AND password =?');
			$result = $query->execute([$username, $password]);
			$row =$query->fetch();

			if ($query->rowCount() > 0) 
			{
				$_SESSION['email'] = $username;
				header("Location:index.php");
			}
			else
			{
				$messageE = "Email ou Mot De Passe incorrects!!";
			}
		}

	}
 ?>
		}
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>fornulaire d'inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1" >
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="fontawesome/css/fontawesome.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="Connexion.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	 <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS -->
        <script src="js/jquery-3.3.1.js"></script>
        <!--<script src="js/jquery-3.2.1.slim.min.js"></script>-->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
</head>
	<body>
	   <div class="container">

	        <div class="row">

			    <div class="col-lg-4 col-lg-offset-4">

			    	<form id="form" method="post" action="#" class="sign animated flipInX">

			    	    <h3 class="text-center">Formulaire De Connexion</h3><hr>

				        <div class="form-group">
					        <label for="email"><span class="blue">*</span> Email</label>
	     			        <input type="email" id="email"  name="email" placeholder="Votre Email" class="form-control">
	                    </div>

				        <div class="form-group">
					        <label for="pass0"><span class="blue">*</span> Mot De Passe</label>
					        <input type="password" id="pass0"  name="pass0" placeholder="Votre Mot de Passe" class="form-control">
					        <p style="color: red;"><?php echo $messageE; ?></p>
				        </div>

				        <div>
				        	<h4 style="color: red;"><?php echo $message; ?></h4>
				        </div>

				        <button type="submit" class="btn btn-danger" id="valide" name="valider"><i class="fas fa-sign-in"></i>CONNECTER</button>

	                </form>
			    </div>   
			</div>      
		</div>
	</body>
</html>