<?php

  session_start();

?>

<!DOCTYPE html>

<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>What Do We Eat?</title>

    <link rel="stylesheet" type="text/css" href="css/profil.css">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

	<!-- Navigation -->
	<a class="menu-toggle rounded" href="#">
	  <i class="fa fa-bars"></i>
	</a>
	<nav id="sidebar-wrapper">
	  <ul class="sidebar-nav">
	    <li class="sidebar-brand">
	      <a class="js-scroll-trigger" href="#page-top">Menu</a>
	    </li>
	    <li class="sidebar-nav-item">
	      <a class="js-scroll-trigger" href="index.php">Accueil</a>
	    </li>
	    <li class="sidebar-nav-item">
	      <a class="js-scroll-trigger" href="inscription.php">Inscription</a>
	    </li>
	    <li class="sidebar-nav-item">
	      <a class="js-scroll-trigger" href="connexion.php">Connexion</a>
	    </li>
	    <li class="sidebar-nav-item">
	      <a class="js-scroll-trigger" href="chat.php">Chat IA</a>
	    </li>
	    <li class="sidebar-nav-item">
	      <a class="js-scroll-trigger" href="contact.php">Contact</a>
	    </li>
	  </ul>
	</nav>

    <section class="content-section bg-light" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
          	<div class="card">
          	  <img src="img/profilepic.jpg" alt="user" style="width:100%">
          	  <h1><span></span><?php echo($_SESSION['Email']); ?></h1>
          	  <p class="title">Téléphone : <?php echo($_SESSION['Telephone']); ?></p>
              <p class="title">Adresse : <?php echo($_SESSION['Adresse']); ?></p>
              <p class="title">Ville : <?php echo($_SESSION['Ville']); ?></p>
              <p class="title">Code Postal : <?php echo($_SESSION['CodePostal']); ?></p>
              <p><button href="deconnexion.php">Se Déconnecter</button></p>
          	</div>
          </div>
        </div>
      </div>
    </section>

 <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>