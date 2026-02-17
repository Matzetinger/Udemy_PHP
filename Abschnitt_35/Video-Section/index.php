<?php 
  setcookie("Beruf", "Friseur", time() + 3600);
  session_start();
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Superglobale Arrays</title>
</head>
<body>
  <nav>
    <p><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays</a></p>
    <h1>Abschnitt 35 - Superglobale Arrays</h1>
    <p><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></p>
  </nav>
  <section id="0" class="section_index">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. $_GET</a></li>
        <li><a href="#2">02. $_POST</a></li>
        <li><a href="#3">03. $_REQUEST</a></li>
        <li><a href="#4">04. $_FILES</a></li>
        <li><a href="#5">05. $_COOKIE</a></li>
        <li><a href="#6">06. $_SESSION</a></li>
        <li><a href="#7">07. $_SERVER</a></li>
      </ul>
    </div>
    <div class="box">
      <h2>Abschnitte</h2>
      <ul>
        <li><a href="../../Abschnitt_30/Video-Section/index.php">30_Operatoren in PHP</a></li>
        <li><a href="../../Abschnitt_31/Video-Section/index.php">31_Arbeiten mit String</a></li>
        <li><a href="../../Abschnitt_32/Video-Section/index.php">32_Fallunterscheidung (Bedingte Anweisung)</a></li>
        <li><a href="../../Abschnitt_33/Video-Section/index.php">33_Schleifen in PHP</a></li>
        <li><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays in PHP</a></li>
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
        <li><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></li>
      </ul>
    </div>
  </section>

 
  
  <!-- 01. $_GET-->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. $_GET</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          if ($_GET){
            $username = $_GET["username"];
            $age = $_GET["age"];
            echo "\$username = $username <br> \$age = $age";
          }
        ?>
    </div>

    <div class="inhalt-container">

      <!-- $_GET -->
      <div class="box">
        

        <h4>$_GET</h4>
        <?php
          if ($_GET){
            $username = $_GET["username"];
            $age = $_GET["age"];
          }
        ?>
        <form action="#" method="get">
          <table> 
            <tr>
              <td>
                <label for="username">Username:</label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  placeholder="Username"
                >
                <label for="age">Alter:</label>
                <input
                  type="text"
                  name="age"
                  id="age"
                  placeholder="Alter"
                >
              </td>

              <td>
                <input type="submit" value="Abschicken">
                <a href="./">Zurücksetzen</a>
              </td>

              <td>
                <p>print_r($_GET) =
                  <span>
                    <?php if ($_GET){
                    print_r($_GET);
                    } 
                    ?>
                  </span>
                </p>
              </td>

              <td>
                <span><?php if (isset($username,$age)){
                            echo "Mein Name ist $username und bin $age Jahre";
                            }
                      ?>
                </span>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 02. $_POST -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. $_POST</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <p>
          Daten werden in einem Array gespeichert <br> Lässt sich auch in eine Variable speichern
        </p>
    </div>

    <div class="inhalt-container">

      <!-- $_POST -->
      <div class="box">
        

        <h4>$_POST</h4>
        
        <form action="#" method="POST">
          <table> 
            <tr>
              <td>
                <label for="email">E-Mail:</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="email@eingeben.de"
                >
                <label for="password">Passwort:</label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Passwort"
                >
              </td>

              <td>
                <input type="submit" value="Anmelden">
                <a href="./">Zurücksetzen</a>
              </td>

              <td>
                <p>print_r($_POST) =
                  <span>
                    <?php if ($_POST){
                    print_r($_POST);
                    } 
                    ?>
                  </span>
                </p>
              </td>

            </tr>
          </table>
        </form>
        
      </div>
    </div>
  </section>

  <!-- 03. $_REQUEST -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>03. $_REQUEST</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <p>
          <p>
          Daten werden in einem Array gespeichert <br> Lässt sich auch in eine Variable speichern
        </p>
        </p>
    </div>

    <div class="inhalt-container">

      <!-- $_REQUEST-->
      <div class="box">
        

        <h4>$_REQUEST (Nicht empfohlen)</h4>
        <p>Enthält alle Daten die über POST, GET oder Cookie Methoden Übermittelt werden</p>
        <table> 
            <tr>
              <td>
                <p>print_r($_REQUEST) =
                  <span>
                    <!-- coditional Rendering -->
                    <?php if ($_REQUEST){
                    print_r($_REQUEST);
                    } 
                    ?>
                  </span>
                </p>
              </td>

            </tr>
          </table>
        
      </div>
    </div>
  </section>

  <!-- 04. $_FILES -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>04. $_FILES</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          
        ?>
        <p>
        </p>
    </div>

    <div class="inhalt-container">

      <!-- $_FILES -->
      <div class="box">
        

        <h4>$_FILES</h4>
        
        <form action="#" method="POST" enctype="multipart/form-data">
          <table> 
            <tr>
              <td>
                <label for="file">Dateiupload:</label>
                <input
                  type="file"
                  name="uploaded_files[]"
                  id="file"
                  multiple
                >
              </td>

              <td>
                <input type="submit" value="Uplaod">
                <a href="./">Zurücksetzen</a>
              </td>

              <td>
                <p>print_r($_FILES) =
                  <span>
                    <?php if ($_FILES){
                    print_r($_FILES);
                    } 
                    ?>
                  </span>
                </p>
              </td>

              <?php if($_FILES):?>
              <td><p>Name der Datei = <span> <?php  echo htmlspecialchars($_FILES["uploaded_files"]["name"][0]); ?></span></p></td>
              <td><p>Vollständiger Pfad = <span> <?php  echo htmlspecialchars($_FILES["uploaded_files"]["full_path"][0]); ?></span></p></td>
              <td><p>Dateityp = <span><?php  echo htmlspecialchars($_FILES["uploaded_files"]["type"][0]); ?></span></p></td>
              <td><p>Temporärer Pfad = <span><?php  echo htmlspecialchars($_FILES["uploaded_files"]["tmp_name"][0]); ?></span></p></td>
              <td><p>Größe der Datei = <span><?php  echo htmlspecialchars (round($_FILES["uploaded_files"]["size"][0]/1024/1024,2)) ; ?></span> MB</p></td>
              <?php endif; ?>
              

            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 05. $_COOKIE -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>05. $_COOKIE</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Cookie setzen -->
      <h4>Cookie setzen</h4>
        
        <p>
          <span class="orange">setcookie</span>("Beruf", "Friseur", time() + 3600);
        </p>
    </div>

    <div class="inhalt-container">

      <!-- $_COOKIE -->
      <div class="box">
        

        <h4>$_COOKIE</h4>
        <?php
          
        ?>
        <p>
         setcookie() Muss immer ganz oben außerhalb der html Struktur stehen !
        </p>


        <h4>Ausgabe</h4>
        
        <table> 
          <?php if($_COOKIE): ?>
            <tr>
              <td><p>print_r($_COOKIE;) = <span><?php print_r($_COOKIE); ?></span> </p></td>
              <td><p>echo($_COOKIE["Beruf"]); = <span><?php echo($_COOKIE["Beruf"]); ?></span></p></td>
            </tr>
          <?php endif; ?>
        </table>
        
      </div>
    </div>
  </section>

  <!-- 06. $_SESSION -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>06. $_SESSION</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Session setzen-->
      <h4>Session setzen</h4>
        <?php 
          $_SESSION["Vorname"]="Matthias";
        ?>
        <p><span class="orange">session_start()</span></p>
        <p><span class="orange">$_SESSION["Vorname"]="Matthias";</span></p>
    </div>

    <div class="inhalt-container">

      <!-- $_SESSION -->
      <div class="box">
        

        <h4>$_SESSION</h4>
        <p>
          Kann auch über mehrere Seiten hinweg abgefragt werden
        </p>


        <h4>Ausgabe</h4>
        
        <table> 
            <tr>
              <td><p>print_r($_SESSION); = <span><?php print_r($_SESSION); ?></span></p></td>
              <td><p><a href="session.php">zur Session.php</a></p></td>
            </tr>
        </table>
        
      </div>
    </div>
  </section>

  <!-- 07. $_SERVER -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>07. $_SERVER</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $port = $_SERVER["SERVER_PORT"];
        ?>
        <p>$port = $_SERVER["SERVER_PORT"];</p>
    </div>

    <div class="inhalt-container">

      <!-- $_SERVER -->
      <div class="box">
        

        <h4>$_SERVER</h4>
        
         <table> 
            <tr>
             
              <td><p>echo $port = <span> <?php echo $port  ?></span></p></td>

              <td>
                <pre>
                  <span>
                    <?php 
                      var_dump($_SERVER)
                    ?>
                  </span>
                </pre>
              </td>
              
            </tr>
         </table>
        
      </div>
    </div>
  </section>
</body>
</html>