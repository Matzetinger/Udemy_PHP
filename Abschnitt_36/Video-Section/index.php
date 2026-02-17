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
  <title>Mathematische Funktionen</title>
</head>
<body>
  <nav>
    <p><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></p>
    <h1>Abschnitt 36 - Mathematische Funktionen</h1>
    <p><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></p>
  </nav>
  <section id="0" class="section_index">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. abs() - Berechnet den absoluten Wert einer Zahl</a></li>
        <li><a href="#2">02. round() - Aufrunden</a></li>
        <li><a href="#3">03. ceil() - Aufrunden</a></li>
        <li><a href="#4">04. floor() - Abrunden</a></li>
        <li><a href="#5">05. sqrt() - Square (Quadratwurzel)</a></li>
        <li><a href="#6">06. pow() - Potenz</a></li>
        <li><a href="#7">07. max() - Höchste Zahl ermitteln</a></li>
        <li><a href="#8">08. min() - niedrigste Zahl ermitteln</a></li>
        <li><a href="#9">09. pi() - Kreis</a></li>
        <li><a href="#10">10. sin() cos() tan() - Sinus / Kosinus / Tangens von ... Grad</a></li>
        <li><a href="#11">11. asin() acos() atan() - ArkusSinus / ArkusKosinus / ArkusTangens von ... in Grad</a></li>
        <li><a href="#12">12. log() - Logarithmus</a></li>
        <li><a href="#13">13. random_int() - Zahl Zwischen ... und ... (aktueller)</a></li>
        <li><a href="#14">14. rand() - Zahl Zwischen ... und ...</a></li>
        <li><a href="#15">15. mt_rand() - Zahl Zwischen ... und ... (bessere version von rand)</a></li>
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
        <li><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></li>
        <li><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></li>
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
                <input type="submit" value="Runden">
                
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
                <input type="submit" value="Aufrunden">
                
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
                <input type="submit" value="Abrunden">
                
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

  <!-- 07. max() - Höchste Zahl ermitteln -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>07. max() - Höchste Zahl ermitteln</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl7 = NULL;
          $zahl71 = NULL;
          $maxZahl = NULL;
          
          

          if((isset($_GET["zahl7"]) && $_GET["zahl7"] !== "") && (isset($_GET["zahl71"]) && $_GET["zahl71"] !== "") ){
            $clean_input7 = str_replace(",", ".", $_GET["zahl7"]);
            $clean_input71 = str_replace(",", ".", $_GET["zahl71"]);
            $clean_inputmax = [$clean_input7, $clean_input71];

            if ((is_numeric($clean_input7)) && (is_numeric($clean_input71))){
            $maxZahl = max((float)$clean_inputmax[0], (float)$clean_inputmax[1] );
            } else {
              $maxZahl = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl7 = NULL; <br> $zahl71 = NULL;<br> $maxzahl = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- max() -->
      <div class="box">
        

        <h4>max()</h4>
        <form action="#7" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl7"><span class="orange">max</span></label>
                (<input
                  type="number"
                  name="zahl7"
                  id="zahl7"
                  placeholder="Zahl"
                  required 
                  max="10"
                >,
                <input
                  type="number"
                  name="zahl71"
                  id="zahl71"
                  placeholder="Zahl"
                  required 
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="MaxZahl Ermitteln">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input7,$clean_input71) ? htmlspecialchars($clean_input7 . "," . $clean_input71) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($maxZahl !== NULL){
                      echo htmlspecialchars($maxZahl);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#7">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 08. min() - niedrigste Zahl ermitteln -->
  <section id="8" class="section">
    <div class="text-box">
      <h2>08. min() - niedrigste Zahl ermitteln</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl8 = NULL;
          $zahl81 = NULL;
          $minZahl = NULL;
          
          

          if((isset($_GET["zahl8"]) && $_GET["zahl8"] !== "") && (isset($_GET["zahl81"]) && $_GET["zahl81"] !== "") ){
            $clean_input8 = str_replace(",", ".", $_GET["zahl8"]);
            $clean_input81 = str_replace(",", ".", $_GET["zahl81"]);
            $clean_inputmin = [$clean_input8, $clean_input81];

            if ((is_numeric($clean_input8)) && (is_numeric($clean_input81))){
            $minZahl = min((float)$clean_inputmin[0], (float)$clean_inputmin[1] );
            } else {
              $minZahl = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl8 = NULL; <br> $zahl81 = NULL;<br> $minzahl = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- min() -->
      <div class="box">
        

        <h4>min()</h4>
        <form action="#8" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl8"><span class="orange">min</span></label>
                (<input
                  type="number"
                  name="zahl8"
                  id="zahl8"
                  placeholder="Zahl"
                  required 
                  max="10"
                >,
                <input
                  type="number"
                  name="zahl81"
                  id="zahl81"
                  placeholder="Zahl"
                  required 
                  max="10"
                >)
              </td>

              <td>
                <input type="submit" value="MinZahl Ermitteln">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input8,$clean_input81) ? htmlspecialchars($clean_input8 . "," . $clean_input81) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($minZahl !== NULL){
                      echo htmlspecialchars($minZahl);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#8">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 09. pi() - Kreis -->
  <section id="9" class="section">
    <div class="text-box">
      <h2>09. pi() - Kreis</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $pi = pi();
          
        ?>
        <p> $pi = pi()</p>
    </div>

    <div class="inhalt-container">

      <!-- pi() -->
      <div class="box">
        

        <h4>pi()</h4>
        
          <table> 
            <tr>
              <td>
                <p> Ergebnis: pi() = 
                  <span>
                    <?php 
                    echo $pi;
                    ?>
                  </span>
                </p>
              </td>
              <td><p>Ergebnis Formatiert : number_format ($pi, 2) = 
                    <span><?php echo number_format ($pi, 2); ?></span>
                  </p>
              </td>
            </tr>
          </table>
        
      </div>
    </div>
  </section>

  <!-- 10. sin() cos() tan() - Sinus / Kosinus / Tangens von ... Grad  -->
  <section id="10" class="section section10">
    <div class="text-box">
      <h2>10. sin() cos() tan() - Sinus / Kosinus / Tangens von ... Grad</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl10 = NULL;
          $zahl101 = NULL;
          $zahl102 = NULL;
          

          if(isset($_GET["zahl10"]) && $_GET["zahl10"] !== ""){
            $clean_input10 = str_replace(",", ".", $_GET["zahl10"]);

            if (is_numeric($clean_input10)){
            $zahl10 = sin(deg2rad((float)$clean_input10));
            } else {
              $zahl10 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          if(isset($_GET["zahl101"]) && $_GET["zahl101"] !== ""){
            $clean_input101 = str_replace(",", ".", $_GET["zahl101"]);

            if (is_numeric($clean_input101)){
            $zahl101 = cos(deg2rad((float)$clean_input101));
            } else {
              $zahl101 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          if(isset($_GET["zahl102"]) && $_GET["zahl102"] !== ""){
            $clean_input102 = str_replace(",", ".", $_GET["zahl102"]);

            if (is_numeric($clean_input102)){
            $zahl102 = tan(deg2rad((float)$clean_input102));
            } else {
              $zahl102 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl10 = NULL; <br> $zahl101 = NULL; <br> $zahl102 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- sin() -->
      <div class="box" id="sin">
        

        <h4>sin()</h4>
        <form action="#sin" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl10"><span class="orange">sin</span>(deg2rad(</label>
                <input
                  type="number"
                  name="zahl10"
                  id="zahl10"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
                <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input10) ? htmlspecialchars($clean_input10) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl10 !== NULL){
                      echo htmlspecialchars($zahl10);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#sin">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
      
      <div class="box" id="cos">
        <h4>cos()</h4>
        <form action="#cos" method="GET">
          <table> 
            <tr>
              <td><label for="zahl101"><span class="orange">cos</span>(deg2rad(</label>
                <input
                  type="number"
                  name="zahl101"
                  id="zahl101"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
              </td>

              <td>
                <input type="submit" value="Berechnen">
              </td>

              <td><p>Eingabe = <?php echo isset($clean_input101) ? htmlspecialchars($clean_input101) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl101 !== NULL){
                      echo htmlspecialchars($zahl101);}
                    ?>
                  </span>
                </p>
              </td>
              
              <td><a href="./#cos">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>

      <div class="box" id="tan">
        <h4>tan()</h4>
        <form action="#tan" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl102"><span class="orange">tan</span>(deg2rad(</label>
                <input
                  type="number"
                  name="zahl102"
                  id="zahl102"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              
              <td><p>Eingabe = <?php echo isset($clean_input102) ? htmlspecialchars($clean_input102) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl102 !== NULL){
                      echo htmlspecialchars($zahl102);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#tan">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 11. asin() acos() atan() - ArkusSinus / ArkusKosinus / ArkusTangens von ... in Grad  -->
  <section id="11" class="section section10">
    <div class="text-box">
      <h2>11. asin() acos() atan() - ArkusSinus / ArkusKosinus / ArkusTangens von ... in Grad</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl11 = NULL;
          $zahl111 = NULL;
          $zahl112 = NULL;
          

          if(isset($_GET["zahl11"]) && $_GET["zahl11"] !== ""){
            $clean_input11 = str_replace(",", ".", $_GET["zahl11"]);

            if (is_numeric($clean_input11)){
            $zahl11 = rad2deg(asin((float)$clean_input11));
            } else {
              $zahl11 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          if(isset($_GET["zahl111"]) && $_GET["zahl111"] !== ""){
            $clean_input111 = str_replace(",", ".", $_GET["zahl111"]);

            if (is_numeric($clean_input111)){
            $zahl111 = rad2deg(acos((float)$clean_input111));
            } else {
              $zahl111 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          if(isset($_GET["zahl112"]) && $_GET["zahl112"] !== ""){
            $clean_input112 = str_replace(",", ".", $_GET["zahl112"]);

            if (is_numeric($clean_input112)){
            $zahl112 = rad2deg(atan((float)$clean_input112));
            } else {
              $zahl112 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl11 = NULL; <br> $zahl111 = NULL; <br> $zahl112 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- asin() -->
      <div class="box" id="asin">
        

        <h4>asin()</h4>
        <form action="#asin" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl11">rad2deg(<span class="orange">asin</span>(</label>
                <input
                  type="number"
                  name="zahl11"
                  id="zahl11"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
                <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input11) ? htmlspecialchars($clean_input11) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl11 !== NULL){
                      echo htmlspecialchars($zahl11);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#asin">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
      
      <div class="box" id="acos">
        <h4>acos()</h4>
        <form action="#acos" method="GET">
          <table> 
            <tr>
              <td><label for="zahl111">rad2deg(<span class="orange">acos</span>(</label>
                <input
                  type="number"
                  name="zahl111"
                  id="zahl111"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
              </td>

              <td>
                <input type="submit" value="Berechnen">
              </td>

              <td><p>Eingabe = <?php echo isset($clean_input111) ? htmlspecialchars($clean_input111) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl111 !== NULL){
                      echo htmlspecialchars($zahl111);}
                    ?>
                  </span>
                </p>
              </td>
              
              <td><a href="./#acos">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>

      <div class="box" id="atan">
        <h4>atan()</h4>
        <form action="#atan" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl112">rad2deg(<span class="orange">atan</span>(</label>
                <input
                  type="number"
                  name="zahl112"
                  id="zahl112"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >))
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              
              <td><p>Eingabe = <?php echo isset($clean_input112) ? htmlspecialchars($clean_input112) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl112 !== NULL){
                      echo htmlspecialchars($zahl112);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#atan">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 12. log() - Logarithmus -->
  <section id="12" class="section">
    <div class="text-box">
      <h2>12. log() - Logarithmus</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl12 = NULL;
          $zahl121 = NULL;
          

          if(isset($_GET["zahl12"]) && $_GET["zahl12"] !== ""){
            $clean_input12 = str_replace(",", ".", $_GET["zahl12"]);

            if (is_numeric($clean_input12)){
            $zahl12 = log((float)$clean_input12);

            if(is_nan($zahl12)){
              $zahl12 = "Mathematisch nicht möglich (imaginäre Zahl)";
            }
            elseif(is_infinite($zahl12)){
              $zahl12 = "Ergebnis zu groß oder unendlich";
            }
            } else {
              $zahl12 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          if(isset($_GET["zahl121"]) && $_GET["zahl121"] !== ""){
            $clean_input121 = str_replace(",", ".", $_GET["zahl121"]);

            if (is_numeric($clean_input121)){
            $zahl121 = log10((float)$clean_input121);

            if(is_nan($zahl121)){
              $zahl121 = "Mathematisch nicht möglich (imaginäre Zahl)";
            }
            elseif(is_infinite($zahl12)){
              $zahl121 = "Ergebnis zu groß oder unendlich";
            }
            } else {
              $zahl121 = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl12 = NULL; <br> $zahl121 = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- log() -->
      <div class="box">
        

        <h4>log()</h4>
        <form action="#12" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl12"><span class="orange">log</span></label>
                (<input
                  type="number"
                  name="zahl12"
                  id="zahl12"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input12) ? htmlspecialchars($clean_input12) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl12 !== NULL){
                      echo htmlspecialchars($zahl12);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#12">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
        <!-- log10() -->
      <div class="box">
        

        <h4>log10()</h4>
        <form action="#12" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl121"><span class="orange">log10</span></label>
                (<input
                  type="number"
                  name="zahl121"
                  id="zahl121"
                  placeholder="Zahl"
                  required 
                  step="0.1"
                  max="100"
                >)
              </td>

              <td>
                <input type="submit" value="Berechnen">
                
              </td>
              <td><p>Eingabe = <?php echo isset($clean_input121) ? htmlspecialchars($clean_input121) : ""; ?></p></td>
              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl121 !== NULL){
                      echo htmlspecialchars($zahl121);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./#12">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 13. random_int() - Zahl Zwischen ... und ... -->
  <section id="13" class="section">
    <div class="text-box">
      <h2>13. random_int() - Zahl Zwischen ... und ...</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl13 = NULL;
          $zahl131 = NULL;
          $random = NULL;
          
          

          if((isset($_POST["zahl13"]) && $_POST["zahl13"] !== "") && (isset($_POST["zahl131"]) && $_POST["zahl131"] !== "") ){
            $clean_input13 = str_replace(",", ".", $_POST["zahl13"]);
            $clean_input131 = str_replace(",", ".", $_POST["zahl131"]);
            $clean_inputrandom = [$clean_input13, $clean_input131];

            if ((is_numeric($clean_input13)) && (is_numeric($clean_input131))){
            $random = random_int((float)$clean_inputrandom[0], (float)$clean_inputrandom[1] );
            } else {
              $random = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl13 = NULL; <br> $zahl131 = NULL;<br> $random = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- random_int() -->
      <div class="box">
        

        <h4>random_int()</h4>
        <form action="./index.php#13" method="POST">
          <table> 
            <tr>
              <td>
                <label for="zahl13"><span class="orange">random_int</span></label>
                (<input
                  type="number"
                  name="zahl13"
                  id="zahl13"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input13) ? htmlspecialchars($clean_input13) : ""; ?>"
                >,
                <input
                  type="number"
                  name="zahl131"
                  id="zahl131"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input131) ? htmlspecialchars($clean_input131) : ""; ?>"
                >)
              </td>

              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input13,$clean_input131) ? htmlspecialchars($clean_input13 . " und " . $clean_input131) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($random !== NULL){
                      echo htmlspecialchars($random);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="?#13">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 14. rand() - Zahl Zwischen ... und ... -->
  <section id="14" class="section">
    <div class="text-box">
      <h2>14. rand() - Zahl Zwischen ... und ...</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl14 = NULL;
          $zahl141 = NULL;
          $rand = NULL;
          
          

          if((isset($_POST["zahl14"]) && $_POST["zahl14"] !== "") && (isset($_POST["zahl141"]) && $_POST["zahl141"] !== "") ){
            $clean_input14 = str_replace(",", ".", $_POST["zahl14"]);
            $clean_input141 = str_replace(",", ".", $_POST["zahl141"]);
            $clean_inputrand = [$clean_input14, $clean_input141];

            if ((is_numeric($clean_input14)) && (is_numeric($clean_input141))){
            $rand = rand((float)$clean_inputrand[0], (float)$clean_inputrand[1] );
            } else {
              $rand = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl14 = NULL; <br> $zahl141 = NULL;<br> $random = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- rand() -->
      <div class="box">
        

        <h4>rand()</h4>
        <form action="./index.php#14" method="POST">
          <table> 
            <tr>
              <td>
                <label for="zahl14"><span class="orange">rand</span></label>
                (<input
                  type="number"
                  name="zahl14"
                  id="zahl14"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input14) ? htmlspecialchars($clean_input14) : ""; ?>"
                >,
                <input
                  type="number"
                  name="zahl141"
                  id="zahl141"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input141) ? htmlspecialchars($clean_input141) : ""; ?>"
                >)
              </td>

              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input14,$clean_input141) ? htmlspecialchars($clean_input14 . " und " . $clean_input141) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($rand !== NULL){
                      echo htmlspecialchars($rand);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="?#14">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

  <!-- 15. mt_rand() - Zahl Zwischen ... und ... -->
  <section id="15" class="section">
    <div class="text-box">
      <h2>15. mt_rand() - Zahl Zwischen ... und ...</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl15 = NULL;
          $zahl151 = NULL;
          $mtrand = NULL;
          
          

          if((isset($_POST["zahl15"]) && $_POST["zahl15"] !== "") && (isset($_POST["zahl151"]) && $_POST["zahl151"] !== "") ){
            $clean_input15 = str_replace(",", ".", $_POST["zahl15"]);
            $clean_input151 = str_replace(",", ".", $_POST["zahl151"]);
            $clean_inputmtrand = [$clean_input15, $clean_input151];

            if ((is_numeric($clean_input15)) && (is_numeric($clean_input151))){
            $mtrand = mt_rand((float)$clean_inputmtrand[0], (float)$clean_inputmtrand[1] );
            } else {
              $mtrand = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl15 = NULL; <br> $zahl151 = NULL;<br> $mtrand = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- mt_rand() -->
      <div class="box">
        

        <h4>mt_rand()</h4>
        <form action="./index.php#15" method="POST">
          <table> 
            <tr>
              <td>
                <label for="zahl15"><span class="orange">mt_rand</span></label>
                (<input
                  type="number"
                  name="zahl15"
                  id="zahl15"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input15) ? htmlspecialchars($clean_input15) : ""; ?>"
                >,
                <input
                  type="number"
                  name="zahl151"
                  id="zahl151"
                  placeholder="Zahl"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input151) ? htmlspecialchars($clean_input151) : ""; ?>"
                >)
              </td>

              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input15,$clean_input151) ? htmlspecialchars($clean_input15 . " und " . $clean_input151) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($mtrand !== NULL){
                      echo htmlspecialchars($mtrand);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="?#15">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>


</body>
</html>