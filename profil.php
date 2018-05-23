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

    <title>Trouvez un titre</title>

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

	<div class="card">
	  <img src="profilepic.jpg" alt="user" style="width:100%">
	  <h1><?php echo($SESSION['Email']); ?>;</h1>
	  <p class="title">CEO & Founder, Example</p>
	  <p>Harvard University</p>
	</div>

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