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
    <p><a href="../../Abschnitt_36/Video-Section/index.php">36</a></p>
    <h1>Abschnitt 37</h1>
    <p><a href="../../Abschnitt_38/Video-Section/index.php">38</a></p>
  </nav>
  <section id="0" class="section_index">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. mt_srand mit mt_rand und mt_getrandmax</a></li>
        <li><a href="#2">02.</a></li>
        <li><a href="#3">03.</a></li>
        <li><a href="#4">04.</a></li>
        <li><a href="#5">05.</a></li>
        <li><a href="#6">06.</a></li>
        <li><a href="#7">07.</a></li>
        <li><a href="#8">08.</a></li>
        <li><a href="#9">09.</a></li>
        <li><a href="#10">10.</a></li>
        <li><a href="#11">11.</a></li>
        <li><a href="#12">12.</a></li>
        <li><a href="#13">13.</a></li>
        </a></li>
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
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
      </ul>
    </div>
  </section>

<!-- 01. mt_srand mit mt_rand und mt_getrandmax-->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01.</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $zahl_min = NULL;
          $random = NULL;
          $srand = NULL;

          if(isset($_POST["srand"]) && $_POST["srand"] !== ""){
            $clean_input_srand = str_replace(",", ".", $_POST["srand"]);
            

            if (is_numeric($clean_input_srand)){
              
            $srand = mt_srand((float)$clean_input_srand);
            } else {
              $srand = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
          

          if(isset($_POST["zahl_min"]) && $_POST["zahl_min"] !== ""){
            $clean_input_min = str_replace(",", ".", $_POST["zahl_min"]);
            $clean_inputrandom = $clean_input_min;

            if (is_numeric($clean_input_min)){
            $random = mt_rand((float)$clean_inputrandom, mt_getrandmax() );
            } else {
              $random = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl_min = NULL; <br> $zahl_max = NULL;<br> $random = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- mt_rand() -->
      <div class="box">
        

        <h4>mt_rand()</h4>
        <form action="./index.php#1" method="POST">
          <table> 
            <tr>
              <td><p>
                <label for="zahl13"><span class="orange">mt_rand</span></label>
                (<input
                  type="number"
                  name="zahl_min"
                  id="zahl_min"
                  placeholder="Zahl_min*"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input_min) ? htmlspecialchars($clean_input_min) : ""; ?>"
                >, 
                <span class="orange"> mt_getrandmax()</span> )</p>
              </td>
              <td><label for="zahl13"><span class="orange">mt_srand</span></label>
                (<input
                  type="number"
                  name="srand"
                  id="srand"
                  placeholder="mt_srand"
                  max="1000"
                  value="<?php echo isset($clean_input_srand) ? htmlspecialchars($clean_input_srand) : ""; ?>"
                >)
              </td>
              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input_min,$clean_input_max) ? htmlspecialchars($clean_input_min . " und " . $clean_input_max) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($random !== NULL){
                      echo htmlspecialchars($random);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="./?#1">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>
</body>
</html>