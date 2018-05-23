<?php
      try
      {
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
          $bdd = new PDO('mysql:host=localhost;dbname=whatdoweeat', 'root', '', $pdo_options);
          echo "connexion réussie";
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
?>