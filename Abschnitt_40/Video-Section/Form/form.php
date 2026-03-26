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
      <h2 class="form-title">Sign Up</h2>
      
      <div class="input-container">
        <label for="input-username">Benutzername</label>
        <input
          type="text"
          name="username"
          id="input-username"
          placeholder="Benutzername"
        />
      </div>

      <div class="input-container">
        <label for="input-email">Email</label>
        <input
          type="email"
          name="email"
          id="input-email"
          placeholder="your@email.com"
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
        />
      </div>
      <div class="button-container">
        <button type="submit" name="send-login">Absenden</button>
      </div>
    </form>
    <small class="error"><?php echo $errormsg;?></small>
    <a href="http://192.168.178.28:3000/UDEMY_PHP/Abschnitt_40/Video-Section/index.php">Zurücksetzen</a>
    
  </body>
</html>
