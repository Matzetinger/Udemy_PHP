<!doctype html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Form/form.style.css" type="text/css">
    <title>Login</title>
  </head>
  <body>
    <nav>
    <p><a class="link" href="../../Abschnitt_39/Video-Section/index.php">39</a></p>
    <h4>Abschnitt 40_u_41</h4>
    <p><a class="link" href="../../Abschnitt_42/Video-Section/index.php">42</a></p>
  </nav>
    
    <form action="#" method="post">
      <h3 class="form-title">Sign Up</h3>
      
      <div class="input-container">
        <label for="input-username">Benutzername</label>
        <input
          type="text"
          name="username"
          id="input-username"
          placeholder="Benutzername" value="<?php echo $username ?? "" ?>"
          required
        />
      </div>

      <div class="input-container">
        <label for="input-email">Email</label>
        <input
          type="email"
          name="email"
          id="input-email"
          placeholder="your@email.com" value="<?php echo $email ?? "" ?>"
          required
        />
      </div>

      <div class="input-container">
        <label for="input-age">Alter</label>
        <input type="number" name="age" id="input-age" placeholder="Alter" value="<?php echo $age ?? "" ?>" />
      </div>

      <div class="input-container">
        <label for="input-password">Passwort</label>
        <input
          type="password"
          name="password"
          id="input-password"
          placeholder="Passwort" value="<?php echo $password ?? "" ?>"
          required
        />
      </div>
      <div class="button-container">
        <button type="submit" name="send-login">Absenden</button>
      </div>
    </form>
    <div class="error-container">
      <small class="error"><?php echo $errormsg; ?></small>
    </div>
    
    <div class="link-container">
      <a href="../../Abschnitt_39/Video-Section/index.php">39_Typedeklaration in Funktionen</a>
      <a href="../../Abschnitt_40_u_41/Video-Section/index.php">Zurücksetzen</a>
      <a href="https://www.w3schools.com/php/php_ref_string.asp" target="_blank" rel="noopener noreferrer">Validierung Strings</a>
      <a href="https://www.w3schools.com/php/php_filter.asp" target="_blank" rel="noopener noreferrer">Validierung mit filter</a>
      <a href="../../Abschnitt_42/Video-Section/index.php">42_Datum & Zeit</a>
    </div>

  <div class="img-container">
    <img src="img/loginCode.png" alt="Login Code">

  </div>
  <div class="info-container">
    <div class="info">
    <p>echo htmlspecialchars($username, ENT_QUOTES, "UTF-8");<br>
      <br>
    
    // PASSWORD <br>
8-16 Zeichen<br>
Mindestens ein Großbuchstaben<br>
Mindestens ein Kleinbuchstabe<br>
Mindestens eine Zahl<br>
Mindestens ein Sonderzeichen<br><br>

# = ^(?=.*[A-Z])(?=.*[a-z])(?=.*[@$!.*?%&§])(?=.*\d)[A-Za-z\d@$!.*?%&§]{8,16}$<br><br>

// Metazeichen: Spezielle Zeichen mit Besonderer Bedeutung.<br>
.: ein Beliebiges Zeichen (außer einem Zeilenumbruch).<br>
^: Anfang der Zeichenkette.<br>
$: Ende der Zeichenkette.<br>
*: Null oder mehr des vorherigen Zeichens.<br>
+: Eins oder mehr des vorherigen Zeichens.<br>
?: Null oder eins des vorherigen Zeichens.<br>
[]: Zeichenklasse. Beispiel [a-z] findet alle kleinbuchstaben.<br>
\: Escape-zeichen, um Metazeichen zu maskieren.<br>
\d: Digit 0-9 [0-9] = Beispiel<br><br>

// Quantifizierter: Bestimmen die Anzahl der Vorkommen.<br>
{n}: Genau "n" Vorkommen.<br>
{n,}: Mindestens "n" Vorkommen.<br>
{n,m}: Zwischen "n" und "m" Vorkommen.

// Gruppierung: Runde Klammern () werden verwendet, um Gruppen zu erstellen und Operationen zu steuern.</p>
</div>
  </div>
  </body>
</html>
