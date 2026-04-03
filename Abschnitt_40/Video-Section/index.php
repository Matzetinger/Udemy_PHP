<?php
$ok = true;
$errormsg= null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST["send-login"])){

      $username = trim($_POST["username"]);
      $email = trim($_POST["email"]);
      $age = (int)trim($_POST["age"]);
      $password = trim($_POST["password"]);
    
  
  
  
      switch (true) {

      # Username
      case empty($username):
        $errormsg = "Der Benutzername ist noch nicht eingetragen!";
        $ok = false;
        break;

      case !ctype_alpha($username):
        $errormsg = "Nur Buchstaben sind erlaubt";
        $ok = false;
        break;

      
      # Email 
      case empty($email):
        $errormsg = "Die Email ist noch nicht eingetragen";
        $ok = false;
        break;

      case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
        $errormsg = "Die Email hat kein Korrektes Format";
        $ok = false;
        break;

      # Age
      // case empty($age):
      //  $errormsg = "Das Alter ist nicht eingetragen";
      //  $ok = false;
      //  break;

      case $_POST["age"] !== "":
        switch (true) {
          case !filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 120]]):
            $errormsg = "Dieses Alter liegt nicht im richtigen Alters-Bereich oder hat falsches Format.";
            $ok = false;
            break;
        }
        
        break;  

      #Password
      case empty($password):
        $errormsg = "Das Passwort ist nicht eingetragen";
        $ok = false;
        break;

      case strlen(trim($password)) < 8:
        $errormsg = "Passwort ist zu kurz (Benötigt mindestens 8 Zeichen)";
        $ok = false;
        break;
      
            
    default:
        $ok = true;
        $errormsg = null;
        break;
    }

    if($ok){
      $errormsg = "Formular korrekt abgesendet";

      

    // Validierung
    // echo htmlspecialchars($username, ENT_QUOTES, "UTF-8");
    // Datenbank ->

    }
  }
}

require_once("./Form/form.php");

