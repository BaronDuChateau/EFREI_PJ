<!DOCTYPE html>
<html lang="en">


 <?php

      require 'connectdb.php';

      if (!empty($_POST['email']) && !empty(($_POST['mdp'])) && !empty(($_POST['tel'])) && !empty(($_POST['adresse'])) && !empty(($_POST['codepostal'])) && !empty(($_POST['ville'])))
      {
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $tel = $_POST["tel"];
        $adresse = $_POST["adresse"];
        $codepostal = $_POST["codepostal"];
        $ville = $_POST["ville"];
        if ($bdd->query("INSERT INTO info VALUES (NULL,'$email','$mdp','$tel','$adresse','$ville','$codepostal')") === TRUE) {
            echo("Inscription avec succès");
        }
        
          
      }
      else {
        echo("Tous les champs doivent être remplis");
      }


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
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-5 mx-auto">
            <h2>Inscription</h2><br><span style="color: gray"><form method="POST" action= "inscription.php">
  <div class="form-group">
    <label for="InputEmail1"><h4>Email</h4></label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"><h6>We'll never share your email with anyone else.</h6></small>
  </div>
 <br><div class="form-group">
    <label for="InputPassword1"><h4>Mot de passe</h4></label>
    <input type="password" class="form-control" name="mdp" placeholder="Enter Password">
  </div>
  <br><div class="form-group">
    <label for="InputTel"><h4>Téléphone</h4></label>
    <input type="tel" class="form-control" name="tel" placeholder="Enter phone number">
  </div>
  <br><div class="form-group">
    <label for="InputAddress"><h4>Adresse</h4></label>
    <input type="text" class="form-control" name="adresse" placeholder="Enter postal address">
  </div>
    <br><div class="form-group">
    <label for="InputPostalCode"><h4>Code postal</h4></label>
    <input type="text" class="form-control" name="codepostal" placeholder="Enter postal code">
  </div>
  <br><div class="form-group">
    <label for="InputVille"><h4>Ville</h4></label>
    <input type="text" class="form-control" name="ville" placeholder="Enter city">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="terms">
    <label class="form-check-label" for="exampleCheck1"><h6>J'accepte les termes et conditions</h6></label>
  </div>
 <br> <button type="submit" class="btn btn-primary">S'inscrire</button>
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