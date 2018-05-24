<?php

session_start();

  include ('connectdb.php');

  if(isset($_POST['submit']) && $_POST['pers_data'][0] != null && $_POST['pers_data'][1] != null)
  {
    //getting posted data 
    $data = $_POST['pers_data'];
    $email = $data[0];
    $password = $data[1];

    $PWresult = $bdd->prepare("SELECT * FROM info WHERE Info_Email = '{$email}'");
    $PWresult -> execute();
    $row = $PWresult->fetch(PDO::FETCH_ASSOC);

    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email) == 1 && trim($password) == trim($row['Info_Mdp']))
    {
      
      
      $_SESSION['ID'] = $row['Info_Id'];
      $_SESSION['Email'] = $row['Info_Email'];
      $_SESSION['MDP'] = $row['Info_Mdp'];
      $_SESSION['Telephone'] = $row['Info_Tel'];
      $_SESSION['Adresse'] = $row['Info_Adress'];
      $_SESSION['Ville'] = $row['Info_City'];
      $_SESSION['CodePostal'] = $row['Info_PostalCode'];
      
      setcookie('ID', $_SESSION['ID'], time() + 3600);
      header('Location: profil.php');
      $PWresult->bdd = null;

    }
  }

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Titre</title>

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

  <?php
  include ('connectdb.php'); 
  ?>

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
      </ul>
    </nav>

    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-5 mx-auto">
            <h2>Connexion</h2><br><span style="color: gray">
  <form name="myform" method="post">
  <div class="form-group" name="form_login" value="form_login">
    <label for="InputEmail1"><h4>Email</h4></label>
    <input type="email" class="form-control" name="pers_data[]" id="email" aria-describedby="emailHelp" value="<?php if (isset($_POST['pers_data'][0])) echo $_POST['pers_data'][0]; ?>" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted"><h6>We'll never share your email with anyone else.</h6></small>
  </div>
 <br><div class="form-group">
    <label for="InputPassword1"><h4>Mot de passe</h4></label>
    <input type="password" class="form-control" name="pers_data[]" id="password" placeholder="Enter Password">
  </div>
 <br> <button type="submit" name="submit" class="btn btn-primary">Se connecter</button><br> <a class="login-link" href="inscription.php"><u>Pas de compte? Inscrivez-vous!</u></a>
 </form></span>
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