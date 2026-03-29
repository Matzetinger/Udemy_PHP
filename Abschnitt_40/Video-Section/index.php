<?php
$ok = true;
$errormsg= null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST["send-login"])){
    switch (true) {
      case empty($_POST["username"]):
        $errormsg = "Username is not set yet!";
        $ok = false;
        break;
        
      case empty($_POST["email"]):
        $errormsg = "Email is not set yet!";
        $ok = false;
        break;

      case empty($_POST["age"]):
        $errormsg = "Age is not set yet!";
        $ok = false;
        break;

      case empty($_POST["password"]):
        $errormsg = "Password is not set yet!";
        $ok = false;
        break;

      case strlen(trim($_POST["password"])) < 8:
        $errormsg = "Passwort ist zu kurz (Benötigt mindestens 8 Zeichen)";
        $ok = false;
        break;

      case !filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL):
        $errormsg = "Die Email hat kein Korrektes Format";
        $ok = false;
        break;
      
            
    default:
        $ok = true;
        $errormsg = null;
        break;
    }

    if($ok){
      $errormsg = "Formular korrekt abgesendet";

      $username = trim($_POST["username"]);
      $email = $_POST["email"];
      $age = (int)$_POST["age"];
      $password = $_POST["password"];

    // Validierung
    // echo htmlspecialchars($username, ENT_QUOTES, "UTF-8");
    // Datenbank ->

    }
  }
}

require_once("./Form/form.php");

