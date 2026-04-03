<!doctype html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Form/form.style.css" type="text/css">
    <title>Login</title>
  </head>
  <body>
    
    <form action="#" method="post">
      <h3 class="form-title">Sign Up</h3>
      
      <div class="input-container">
        <label for="input-username">Benutzername</label>
        <input
          type="text"
          name="username"
          id="input-username"
          placeholder="Benutzername"
          required
        />
      </div>

      <div class="input-container">
        <label for="input-email">Email</label>
        <input
          type="email"
          name="email"
          id="input-email"
          placeholder="your@email.com"
          required
        />
      </div>

      <div class="input-container">
        <label for="input-age">Alter</label>
        <input type="number" name="age" id="input-age" placeholder="Alter" />
      </div>

      <div class="input-container">
        <label for="input-password">Passwort</label>
        <input
          type="password"
          name="password"
          id="input-password"
          placeholder="Passwort"
          required
        />
      </div>
      <div class="button-container">
        <button type="submit" name="send-login">Absenden</button>
      </div>
    </form>
    <small class="error"><?php echo $errormsg;?></small>
    <a href="../../Abschnitt_40/Video-Section/index.php">Zurücksetzen</a>
    <a href="https://www.w3schools.com/php/php_ref_string.asp" target="_blank" rel="noopener noreferrer">Validierung Strings</a>
    <a href="https://www.w3schools.com/php/php_filter.asp" target="_blank" rel="noopener noreferrer">Validierung mit filter</a>
    <a href="../../Abschnitt_39/Video-Section/index.php">Zürück zu Abschnitt 39</a>

  </body>
</html>
