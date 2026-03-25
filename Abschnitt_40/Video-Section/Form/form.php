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
          name="uemail"
          id="input-email"
          placeholder="Email"
        />
      </div>

      <div class="input-container">
        <label for="input-age">Alter</label>
        <input type="number" name="age" id="input-age" placeholder="Alter" />
      </div>

      <div class="input-password">
        <label for="input-password">Passwort</label>
        <input
          type="password"
          name="password"
          id="input-password"
          placeholder="Passwort"
        />
      </div>

      <button type="submit">Absenden</button>
    </form>
  </body>
</html>
