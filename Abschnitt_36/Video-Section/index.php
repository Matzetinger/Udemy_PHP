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
  <title>Document</title>
</head>
<body>
  <nav>
    <p><a href="../../Abschnitt_35/Video-Section/index.php">35</a></p>
    <h1>Abschnitt 36</h1>
    <p><a href="../../Abschnitt_37/Video-Section/index.php">37</a></p>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. abs() - Berechnet den absoluten Wert einer Zahl</a></li>
        <li><a href="#2">02. round() - Aufrunden</a></li>
        <li><a href="#3">03. ceil() - Aufrunden</a></li>
        <li><a href="#4">04. floor() - Abrunden</a></li>
        <li><a href="#5">05. sqrt() - Square (Quadratwurzel)</a></li>
        <li><a href="#6">06. pow() - Potenz</a></li>
        <li><a href="#7">07. </a></li>
      </ul>
    </div>
  </section>

 
  
  <!-- 01. abs() - Berechnet den absoluten Wert einer Zahl -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. abs() - Berechnet den absoluten Wert einer Zahl</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl = NULL;
          

          if(isset($_GET["zahl"]) && $_GET["zahl"] !== ""){
            $clean_input = str_replace(",", ".", $_GET["zahl"]);

            if (is_numeric($clean_input)){
            $zahl = abs((float)$clean_input);
            } else {
              $zahl = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- abs() -->
      <div class="box">
        

        <h4>abs()</h4>
        <form action="#1" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl"><span class="orange">abs</span></label>
                (<input
                  type="number"
                  name="zahl"
                  id="zahl"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
              </td>

              <td><p>Eingabe = <?php echo isset($clean_input) ? htmlspecialchars($clean_input) : ""; ?></p></td>
              
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl !== NULL){
                      echo htmlspecialchars($zahl);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#1">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 02. round() - Runden -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. round() - Runden</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl2 = NULL;
          

          if(isset($_GET["zahl2"]) && $_GET["zahl2"] !== ""){
            $clean_input2 = str_replace(",", ".", $_GET["zahl2"]);

            if (is_numeric($clean_input2)){
            $zahl2 = round((float)$clean_input2);
            } else {
              $zahl2 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl2 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- round() -->
      <div class="box">
        

        <h4>round()</h4>
        <form action="#2" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl2"><span class="orange">round</span></label>
                (<input
                  type="number"
                  name="zahl2"
                  id="zahl2"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="10"
                >, Wert für Dezimal)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input2) ? htmlspecialchars($clean_input2) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl2 !== NULL){
                      echo htmlspecialchars($zahl2);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#2">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 03. ceil() - Aufrunden -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>03. ceil() - Aufrunden</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl3 = NULL;
          

          if(isset($_GET["zahl3"]) && $_GET["zahl3"] !== ""){
            $clean_input3 = str_replace(",", ".", $_GET["zahl3"]);

            if (is_numeric($clean_input3)){
            $zahl3 = ceil((float)$clean_input3);
            } else {
              $zahl3 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl3 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- ceil() -->
      <div class="box">
        

        <h4>ceil()</h4>
        <form action="#3" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl3"><span class="orange">ceil</span></label>
                (<input
                  type="number"
                  name="zahl3"
                  id="zahl3"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input3) ? htmlspecialchars($clean_input3) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl3 !== NULL){
                      echo htmlspecialchars($zahl3);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#3">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 04. floor() - Abrunden -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>04. floor() - Abrunden</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl4 = NULL;
          

          if(isset($_GET["zahl4"]) && $_GET["zahl4"] !== ""){
            $clean_input4 = str_replace(",", ".", $_GET["zahl4"]);

            if (is_numeric($clean_input4)){
            $zahl4 = floor((float)$clean_input4);
            } else {
              $zahl4 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl4 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- floor() -->
      <div class="box">
        

        <h4>floor()</h4>
        <form action="#4" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl4"><span class="orange">floor</span></label>
                (<input
                  type="number"
                  name="zahl4"
                  id="zahl4"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input4) ? htmlspecialchars($clean_input4) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl4 !== NULL){
                      echo htmlspecialchars($zahl4);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#4">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 05. sqrt() - Square (Quadratwurzel) -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>05. sqrt() - Square (Quadratwurzel)</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl5 = NULL;
          

          if(isset($_GET["zahl5"]) && $_GET["zahl5"] !== ""){
            $clean_input5 = str_replace(",", ".", $_GET["zahl5"]);

            if (is_numeric($clean_input5)){
            $zahl5 = sqrt((float)$clean_input5);
            } else {
              $zahl5 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl5 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- sqrt() -->
      <div class="box">
        

        <h4>sqrt()</h4>
        <form action="#5" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl5"><span class="orange">floor</span></label>
                (<input
                  type="number"
                  name="zahl5"
                  id="zahl5"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input5) ? htmlspecialchars($clean_input5) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl5 !== NULL){
                      echo htmlspecialchars($zahl5);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#5">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 06. pow() - Potenz -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>06. pow() - Potenz</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl6 = NULL;
          $zahl61 = Null;
          $zahl661 = NULL;
          

          if((isset($_GET["zahl6"]) && $_GET["zahl6"] !== "") && (isset($_GET["zahl61"]) && $_GET["zahl61"] !== "")){
            $clean_input6 = str_replace(",", ".", $_GET["zahl6"]);
            $clean_input61 = str_replace(",", ".", $_GET["zahl61"]);

            if (is_numeric($clean_input6) && is_numeric($clean_input61)){
            $zahl661 = pow((float)$clean_input6, (float)$clean_input61);

            if(is_nan($zahl661)){
              $zahl661 = "Mathematisch nicht möglich (imaginäre Zahl)";
            }
            elseif(is_infinite($zahl661)){
              $zahl661 = "Ergebnis zu groß oder unendlich";
            }
            
            } else {
              $zahl661 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl6 = NULL; <br> $zahl61 = Null; <br> $zahl661 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- pow() -->
      <div class="box">
        

        <h4>pow()</h4>
        <form action="#6" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl6"><span class="orange">pow</span></label>
                (<input
                  type="number"
                  name="zahl6"
                  id="zahl6"
                  placeholder="Zahl Basis"
                  required 
                  step="0.1"
                  max="10"
                >,
                <input
                  type="number"
                  name="zahl61"
                  id="zahl61"
                  placeholder="Zahl exponent"
                  required 
                  step="0.1"
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input6, $clean_input61) ? htmlspecialchars("$clean_input6,$clean_input61") : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl661 !== NULL){
                      echo htmlspecialchars($zahl661);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#6">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  

</body>
</html>