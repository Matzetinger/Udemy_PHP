<?php


$ok = true;
$errormsg= null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if(isset($_POST["send-login"])){

      $username = trim($_POST["username"]);
      $email = trim($_POST["email"]);
      $age = (int)trim($_POST["age"]);
      $password = trim($_POST["password"]);
      $password_pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[@$!.*?%&§])(?=.*\d)[A-Za-z\d@$!.*?%&§]{8,16}$/';
    
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

      #Password
      case empty($password):
        $errormsg = "Das Passwort ist nicht eingetragen";
        $ok = false;
        break;

      case !(bool)preg_match($password_pattern, $password):
        $errormsg = "Das Passwort ist nicht im richtigen Format <br>
                      8-16 Zeichen <br>
                      Mindestens ein Großbuchstaben <br>
                      Mindestens ein Kleinbuchstabe <br>
                      Mindestens eine Zahl <br>
                      Mindestens ein Sonderzeichen" ;
        $ok = false;
        break;
      
        case $_POST["age"] !== "":
        switch (true) {
          case !filter_var($age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 0, "max_range" => 120]]):
            $errormsg = "Dieses Alter liegt nicht im richtigen Alters-Bereich oder hat falsches Format.";
            $ok = false;
           
            break;
        }

        break;  
            
    default:
        $ok = true;
        $errormsg = null;
        break;
    }

    if($ok){
      $errormsg = "Formular korrekt abgesendet";
      $username = null;
      $email = null;
      $age = null;
      $password = null;
    }
  }
}
require_once("./Form/form.php");


// echo htmlspecialchars($username, ENT_QUOTES, "UTF-8");


// PASSWORD 
// 8-16 Zeichen
// Mindestens ein Großbuchstaben
// Mindestens ein Kleinbuchstabe
// Mindestens eine Zahl
// Mindestens ein Sonderzeichen

# = ^(?=.*[A-Z])(?=.*[a-z])(?=.*[@$!.*?%&§])(?=.*\d)[A-Za-z\d@$!.*?%&§]{8,16}$

// Metazeichen: Spezielle Zeichen mit Besonderer Bedeutung.
// .: ein Beliebiges Zeichen (außer einem Zeilenumbruch).
// ^: Anfang der Zeichenkette.
// $: Ende der Zeichenkette.
// *: Null oder mehr des vorherigen Zeichens.
// +: Eins oder mehr des vorherigen Zeichens.
// ?: Null oder eins des vorherigen Zeichens.
// []: Zeichenklasse. Beispiel [a-z] findet alle kleinbuchstaben.
// \: Escape-zeichen, um Metazeichen zu maskieren.
// \d: Digit 0-9 [0-9] < Beispiel

// Quantifizierter: Bestimmen die Anzahl der Vorkommen.
// {n}: Genau "n" Vorkommen.
// {n,}: Mindestens "n" Vorkommen.
// {n,m}: Zwischen "n" und "m" Vorkommen.

// Gruppierung: Runde Klammern () werden verwendet, um Gruppen zu erstellen und Operationen zu steuern.









