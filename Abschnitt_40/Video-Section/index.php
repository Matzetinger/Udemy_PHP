<?php

$errormsg= null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST["send-login"])){
    switch (true) {
      case empty($_POST["username"]):
        $errormsg = "Username is not set yet!";
        break;
        
      case empty($_POST["email"]):
        $errormsg = "Email is not set yet!";
        break;

      case empty($_POST["age"]):
        $errormsg = "Age is not set yet!";
        break;

      case empty($_POST["password"]):
        $errormsg = "Password is not set yet!";
        break;
            
    default:
        $errormsg = null;
        break;
    }

    if(!$errormsg){
      $errormsg = "Formular korrekt abgesendet";

      $username = $_POST["username"];
      echo htmlspecialchars($username, ENT_QUOTES, "UTF-8");

      // Validierung
      // Datenbank ->
    }
  }
}

require_once("./Form/form.php");

