<!DOCTYPE html>
<html lang="en">


 <?php

      session_start();
      require 'connectdb.php';

?>

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
          <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services">Services</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>

    <section class="content-section bg-light" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <h2 class="text-center">Répondez à notre questionnaire, et découvrez notre menu!</h2><br><span style="color: gray"><form method="POST" action= "questionnaire.php">
  <br><div class="form-group">
    <label><h4>1/ Vous êtes :</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q1" value="0">Affamé
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q1" value="1">En forme
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q1" value="2">Un peu balloné
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>2/ Mangez-vous épicé?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q2" value="1">Oui, j'adore!
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q2" value="0">Non, jamais
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>3/ Plutôt lêve-tôt ou grasse mat'?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q3" value="0">Je suis du matin
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q3" value="1">Je suis un professionnel de la grasse matinée
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>4/ En ce moment, vous vous sentez :</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q4" value="1">Un peu fatigué
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q4" value="0">Complètement ko!
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q4" value="2">En pleine forme
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>5/ Grinder / Tinder ou Uber?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q5" value="0">Grinder / Tinder
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q5" value="1">Uber
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>6/ Passez-vous plus de temps dans les transports en communs, ou dans la rue?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q6" value="0">Transports vie
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q6" value="1">Rien de tel qu'une bonne petite marche à l'air frais
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>7/ Série ou Film</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q7" value="0">Séries à donf
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q7" value="1">Film à balle
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>8/ Ce soir, c'est...</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q8" value="0">La fête!
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q8" value="1">Netflix & chill
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q8" value="2">Je sais pas encore
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>9/ Pizza ou Burger?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q9" value="0">Team Burger
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q9" value="1">Pizza 4 ever
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q9" value="2">Impossible de choisir... Les deux!
      </label>
    </div>
  </div>
  <br><div class="form-group">
    <label><h4>10/ Sucré ou salé?</h4></label><br>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q10" value="0">Plus c'est sucré, mieux je me porte
      </label>
    </div>
    <div class="form-check-inline">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="q10" value="1">Ca manque de sel!
      </label>
    </div>
  </div>
 <br> <button type="submit" class="btn btn-primary">Soumettre le questionnaire</button>
</form></span></h2>
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