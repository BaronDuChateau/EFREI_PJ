<?php
  
  session_start();

  if (isset($_SESSION['ID']) != null) {
    setcookie('ID', $_SESSION['ID'], time() + 3600);
  }

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

	<!-- Paiement -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

  <body id="page-top">
    <!-- Navigation -->
    <?php

      if (isset($_SESSION['ID']) != null) {
    ?>

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
          <a class="js-scroll-trigger" href="questionnaire.php">Questionnaire</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="profil.php">Profil</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="chat.php">Chat IA</a>
        </li>
        <br><br>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </nav>

    <?php

      }
      else header('Location : index.php');

    ?>

    <!-- Portfolio -->

<section class="content-section" id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 mx-auto">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Payment Details
						</h3>
						<div class="checkbox pull-right">
							<label>
								<input type="checkbox" />
								Remember
							</label>
						</div>
					</div>
					<div class="panel-body">
						<form role="form">
						<div class="form-group">
							<label for="cardNumber">
								CARD NUMBER</label>
							<div class="input-group">
								<input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
									required autofocus />
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-7 col-md-7">
								<div class="form-group">
									<label for="expityMonth">
										EXPIRY DATE</label>
									<div class="col-xs-6 col-lg-6 pl-ziro">
										<input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
									</div>
									<div class="col-xs-6 col-lg-6 pl-ziro">
										<input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
								</div>
							</div>
							<div class="col-xs-5 col-md-5 pull-right">
								<div class="form-group">
									<label for="cvCode">
										CV CODE</label>
									<input type="password" class="form-control" id="cvCode" placeholder="CV" required />
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
				<br/>
				<a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
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