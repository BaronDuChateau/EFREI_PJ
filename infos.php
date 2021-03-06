<!DOCTYPE html>
<html lang="en">


 <?php

      require 'connectdb.php';
      session_start();

      if(isset($_SESSION['ID']))
      {
        $user_id = $_SESSION['ID'];
        $sql = "SELECT Info_Id, Info_Email, Info_Mdp, Info_Tel, Info_Adress, Info_City, Info_PostalCode FROM Info WHERE Info_Id = $user_id";
        //$sql = "SELECT Info VALUES ('','$email','$mdp','$tel','$adresse','$ville','$codepostal') WHERE Info_Id = membre_id";
        $bdd->query($sql);
        $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        $id = $row['Info_Id'];
        $email = $row['Info_Email'];
        $adresse = $row['Info_Adress'];
        $codepostal = $row['Info_PostalCode'];
        $ville = $row['Info_City'];
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
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-5 mx-auto">
            <h2>Inscription</h2><br><span style="color: gray"><form method="POST" action= "inscription.php">
  <div class="form-group">
    <label for="InputEmail1"><h4>Email</h4></label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required value ="<?php echo  $email ;?>">
    <small id="emailHelp" class="form-text text-muted"><h6>We'll never share your email with anyone else.</h6></small>
  </div>
  <br><div class="form-group">
    <label for="InputTel"><h4>Téléphone</h4></label>
    <input type="tel" class="form-control" name="tel" required value ="<?php echo  $tel ;?>">
  </div>
  <br><div class="form-group">
    <label for="InputAddress"><h4>Adresse</h4></label>
    <input type="text" class="form-control" name="adresse" required value ="<?php echo  $adresse ;?>">
  </div>
  <br><div class="form-group">
    <label for="InputVille"><h4>Ville</h4></label>
    <input type="text" class="form-control" name="ville" required value ="<?php echo  $ville ;?>">
  </div>
    <br><div class="form-group">
    <label for="InputPostalCode"><h4>Code postal</h4></label>
    <input type="text" class="form-control" name="codepostal" required value ="<?php echo  $codepostal ;?>">
  </div>
   <br><div class="form-group">
    <label for="InputPassword1"><h4>Mot de passe</h4></label>
    <input type="password" class="form-control" name="mdp" placeholder="Entrez votre mdp pour actualiser">
  </div>
 <br> <button type="submit" class="btn btn-primary">Actualiser</button>
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

