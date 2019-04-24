<?php 
	
	$db = new pdo ("mysql:host=localhost; dbname=Construction", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Page Principale</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1" >
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
     
	 <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
		    
		    <div class="collapse navbar-collapse">
		        <div class="navbar-nav mr-auto">
		           <!-- <a class="nav-item nav-link" href="#">Home</a>
		           <a class="nav-item nav-link" href="#">Features</a>
		           <a class="nav-item nav-link" href="#">Pricing</a>
		           <a class="nav-item nav-link" href="#">Disabled</a> -->
		        </div>

		        <a class="navbar-brand justify-content-center mr-auto" href="#"><h1>IsO<span class="text-success">House</span></h1></a> 

		       <!--  <form action="#">
			      <a href="connexion.php" class="btn btn-info btn-sm">Se Connecter</a>
			      <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-sign-in-alt"></i> S'inscrire</a>
			    </form> -->
		    </div>
		</nav>
    
         <div class="carrousel-iso">
    <div id="carouseliso" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouseliso" data-slide-to="0" class="active"></li>
        <li data-target="#carouseliso" data-slide-to="1"></li>
        <li data-target="#carouseliso" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/maison1.jpg" class="d-block w-100" alt="..." style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            <div class="isocaption">
                <h1>Bienvenue sur Iso<span class="text-success">House</span><br> Avec nous plus besoin de se prendre la tête pour la construction de votre Maison car nous sommes spécialisés dans la construction de differents types de maisons selon votre</h1>
            </div>  
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/maison2.jpg" class="d-block w-100" alt="..." style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            
              <div class="isocaption">
                   <h1> A Iso<span class="text-success">House</span> Nous avons une équipe d'agents très qualifiés pour repondre a vos besoins!!!</h1>
                 </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/maison.jpg" class="d-block w-100" alt="..." style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            
              <div class="isocaption">
                   <h1 >Nous vous aidons dans choix de votre type de maison a construire!!</h1>
              </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouseliso" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouseliso" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
        <p></p>

        <div class="jumbotron">
	      <h1 class="text-warning text-center">NOS DIFFERENTES TYPE DE MAISONS A CONSTRUIRE</h1>      
	    </div> 
        	<div class="row">
	        	<div class="col-sm-3">
				    <div class="card">
					    <img class="card-img-top" src="images/1.jpg" style="width:100%">
					    <div class="card-body">
					      <h4 class="card-title">Maison Au Bord De L'océan</h4>
					       <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				          <a href="information.php?id=<?=$result = 1 ?>" class="btn btn-primary">Plus D'Infos</a>
				          <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
					    </div>
				    </div>
			    </div>

				<div class="col-sm-3">
				    <div class="card">
				        <img class="card-img-top" src="images/2.jpg">
				        <div class="card-body">
				          <h4 class="card-title">Maison A Etage</h4>
				          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				          <a href="information.php?id=<?=$result = 2 ?>" class="btn btn-primary">Plus D'Infos</a>
				          <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
				        </div>
				    </div>
			    </div>    

				<div class="col-sm-3">
				    <div class="card">
				        <img class="card-img-top" src="images/3.jpg" style="width:100%">
				        <div class="card-body">
				           <h4 class="card-title">Maison A Toit Plat</h4>
				           <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				           <a href="information.php?id=<?=$result = 3 ?>" class="btn btn-primary">Plus D'Infos</a>
				           <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
				        </div>
				    </div>
			    </div>

			    <div class="col-sm-3">
			        <div class="card">
			            <img class="card-img-top" src="images/4.jpg" style="width:100%">
			            <div class="card-body">
			                <h4 class="card-title">Maison D'Architecte</h4>
			                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
			                <a href="information.php?id=<?=$result = 4 ?>" class="btn btn-primary">Plus D'Infos</a>
			                <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
			           </div>
			        </div>   
                </div>
            </div><br>

            <div class="row">
	        	<div class="col-sm-3">
				    <div class="card">
					    <img class="card-img-top" src="images/5.jpg" style="width:100%">
					    <div class="card-body">
					      <h4 class="card-title">Maison Duplex</h4>
					      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
					      <a href="information.php?id=<?=$result = 5 ?>" class="btn btn-primary">Plus D'Infos</a>
					     <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
					    </div>
				    </div>
			    </div>

				<div class="col-sm-3">
				    <div class="card">
				        <img class="card-img-top" src="images/6.jpg" style="width:100%">
				        <div class="card-body">
				          <h4 class="card-title">Maison En Bois</h4>
				          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				          <a href="information.php?id=<?=$result = 6 ?>" class="btn btn-primary">Plus D'Infos</a>
				          <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
				        </div>
				    </div>
			    </div>    

				<div class="col-sm-3">
				    <div class="card">
				        <img class="card-img-top" src="images/7.jpg" style="width:100%">
				        <div class="card-body">
				           <h4 class="card-title">Maison Insolite</h4>
				           <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
				           <a href="information.php?id=<?=$result = 7 ?>" class="btn btn-primary">Plus D'Infos</a>
				           <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.php" class="btn btn-success">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
				        </div>
				    </div>
			    </div>

			    <div class="col-sm-3">
			        <div class="card">
			            <img class="card-img-top" src="images/8.jpg" style="width:100%">
			            <div class="card-body">
			                <h4 class="card-title">Maison Phénix</h4>
			                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
			                <a href="information.php?id=<?=$result = 8 ?>" class="btn btn-primary">Plus D'Infos</a>
			                <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal">
								Construire
						  </button>
						    <div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content text-center">
										
										<div class="modal-header">
											<h4 class="modal-title"><i class="fas fa-exclamation-triangle text-danger"></i> IMPORTANT</h4>
											<button type="button" class="close" data-dismiss="modal"></button>
										</div>

										<div class="modal-body"><br>
											Bonjour!! Chèr(es) client(es) en cliquant sur le boutton <strong>Valider La Commande</strong> vous valider l'achat de cette maison!!<br><br>
											Veuillez appuyer sur le bouton <strong>Retour</strong> pour <strong>annuler</strong> votre achat<br><br>
											Nous vous invitons à aller lire toutes les informations qui concerne ladite maison si ce n'est pas encore fait avant de confirmer votre <strong>ACHAT!</strong><br><br>
											<h3>Merci Pour Votre Bonne Compréhension!!</h3>
										</div>

										<div class="modal-footer">
											<a href="index.html" class="btn btn-success mr-5">Retour</a>
											<button type="button" class="btn btn-danger">Valider La Commande</button>
										</div>
									</div>
					            </div>
			                </div>
			           </div>
			        </div>   
                </div>
            </div><br>

			<div class="jumbotron">
				<h2 class="text-center text-danger">NOS DIFFERENTS ARCHITECTES</h2><br>
  				<div class="row">
  			        <div class="col-sm-4">		
					  	<img src="images/a1.jpg"><br><br>
					  	<h3 class="text-center">Kone Oumar Ben Mohamed</h3>
					</div>
					<div class="col-sm-4">  
					  	<img src="images/a2.jpg" style="width:100%"><br><br>
					  	<h3 class="text-center">Shanke Mame Asta</h3>
				    </div>
				    <div class="col-sm-4">   
					  	<img src="images/a3.jpg" style="width:100%"><br><br>
					  	<h3 class="text-center">Kone Oumar Ben Mohamed</h3>
                    </div> 
			    </div>
            </div>

		    <footer class="footer footer-expand footer-whrite bg-dark">

			    <!-- Footer Links -->
			    <div class="container text-center text-md-left">

			      <!-- Grid row -->
			      <div class="row">

			        <!-- Grid column -->
			        <div class="col-md-4 mx-auto mt-5">
			            <h1><span class="text-light">IsO</span><span class="text-success">House</span></h1>
			            <p><div class="text-light">EcoHouse est une entreprise qui a été créée en 2019 sous forme d’entreprise individuelle. Elle évolut dans le domaine du bâtiment, des travaux publics.</div></p>
			        </div>

			        <div class="col-md-2 mx-auto">

			          <!-- Links -->
			          <h5 class="font-weight-bold text-uppercase mt-5 text-light">Nous Suivre</h5>

			          <ul style="list-style-type: none;">
			            <li>
			              <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
			            </li>
			            <li>
			              <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
			            </li>
			            <li>
			              <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
			            </li>
			            <li>
			              <a href="#" class="text-light"><i class="fab fa-whatsapp"></i></a>
			            </li>
			          </ul>

			        </div>

			    </div>
			    <hr>
			    <div class="footer-copyright text-center py-3 text-light">
			    	<h2>IsO <span class="text-success">NaN</span> <span class="text-danger">3.0</span></h2>
			    </div>
            </footer>
	</div>
</body>
</html>