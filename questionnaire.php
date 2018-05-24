<<<<<<< HEAD
=======
<?php
    session_start();
    if (isset($_POST['q1'])) {
      $var1 = $_POST['q1'];
      $var2 = $_POST['q2'];
      $var3 = $_POST['q3'];
      $var4 = $_POST['q4'];
      $var5 = $_POST['q5'];
      $var6 = $_POST['q6'];
      $var7 = $_POST['q7'];
      $var8 = $_POST['q8'];
      $var9 = $_POST['q9'];
      $var10 = $_POST['q10'];
      //$cmd="C:\\wamp64\\www\\EFREI_PJ-master\\Final.py ".escapeshellarg($var1)." ".escapeshellarg($var2)." ".escapeshellarg($var3)." ".escapeshellarg($var4)." ".escapeshellarg($var5)." ".escapeshellarg($var6)." ".escapeshellarg($var7)." ".escapeshellarg($var8)." ".escapeshellarg($var9)." ".escapeshellarg($var10);
      $cmd = escapeshellcmd("dir");
      sleep(3);
      echo (shell_exec($cmd));
      $cmd = escapeshellcmd("runas /user:hugo@DESKTOP-EKD2RLC C:\wamp64\www\EFREI_PJ-master\Final.py ".$var1." ".$var2." ".$var3." ".$var4." ".$var5." ".$var6." ".$var7." ".$var8." ".$var9." ".$var10);
      $output = shell_exec($cmd);
      echo $output;
      $output = shell_exec("az1919az1919");
      sleep(3);
      echo $output;
      $homepage = file_get_contents('prediction.txt');
    }
?>
<!DOCTYPE html>
<html lang="en">


>>>>>>> e5f33083967c957975c3f8cf4c980b45dd99066c
 <?php

      require 'connectdb.php';

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
<<<<<<< HEAD

    <?php

      }
      else header('Location : connexion.php');

    ?>

=======
>>>>>>> e5f33083967c957975c3f8cf4c980b45dd99066c
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-5 mx-auto">

            <h2><?php if (isset($homepage)) { echo ("Votre menu est le suivant : " . $homepage); } ?>
              Répondez à notre questionnaire, et découvrez notre menu!</h2><br><span style="color: gray"><form id="quest" method="POST" action= "questionnaire.php">
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
        <p class="text-muted small mb-0">Copyright &copy; TeamTransverse 2018</p>
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