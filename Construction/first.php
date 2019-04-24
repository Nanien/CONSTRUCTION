<!DOCTYPE html>
<html>
<head>
	<title>Page Principale</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1" >
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="first.css">
     
	 <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS -->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
		    
		    <div class="collapse navbar-collapse">
		            <form class="ml-auto mr-auto">
				      <a href="inscription.php" class="btn btn-danger"><i class="fas fa-sign-in-alt"></i> S'inscrire</a>
				    </form>

		        <a class="navbar-brand justify-content-center mr-auto" href="#"><h1>IsO<span class="text-success">House</span></h1></a> 

		        <form class="mr-auto">
			      <a href="connexion.php" class="btn btn-info ">Se Connecter</a>
			    </form>
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
          <img src="images/mais.jpg" class="d-block w-100" style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            <div class="isocaption">
                <h1 >Vous êtes a la recherche de Maison en toute sécurité?<br> Bienvenue chez Iso<span class="text-success">House</span></h1>
            </div>
            
            
            
          </div>
     </div>
        <div class="carousel-item">
          <img src="images/4.jpg" class="d-block w-100" style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            
              <div class="isocaption">
                   <h1 >Vous êtes a la recherche de Maison en toute sécurité?  <br> Bienvenue chez Iso<span class="text-success">House</span></h1>
                 </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/maiso.jpg" class="d-block w-100" style="height:800px;">
          <div class="carousel-caption d-none d-md-block">
            
              <div class="isocaption">
                   <h1 >Vous êtes a la recherche de Maison en toute sécurité?<br> Bienvenue chez Iso<span class="text-success">House</span></h1>
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
			              <a href="#" class="text-success">Facebook</a>
			            </li>
			            <li>
			              <a href="#" class="text-success">Instagram</a>
			            </li>
			            <li>
			              <a href="#" class="text-success">Youtube</a>
			            </li>
			            <li>
			              <a href="#" class="text-success">Whatsapp</a>
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