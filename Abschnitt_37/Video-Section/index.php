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
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. mt_srand mit mt_rand und mt_getrandmax</a></li>
        <li><a href="#2">02. Random/Randomizer Klasse (ab PHP 8.2)</a></li>
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
      </ul>
    </div>
    <div class="box_abschnitte">
      <h2>Abschnitte</h2>
      <ul>
        <li><a href="../../Abschnitt_30/Video-Section/index.php">30_Operatoren in PHP</a></li>
        <li><a href="../../Abschnitt_31/Video-Section/index.php">31_Arbeiten mit String</a></li>
        <li><a href="../../Abschnitt_32/Video-Section/index.php">32_Fallunterscheidung</a></li>
        <li><a href="../../Abschnitt_33/Video-Section/index.php">33_Schleifen in PHP</a></li>
        <li><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays in PHP</a></li>
        <li><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></li>
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
        <li>37_Zufallszahlen generieren</li>
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
          $randFloat = NULL;
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
                <label for="zahl_min"><span class="orange">mt_rand</span></label>
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
              <td><label for="srand"><span class="orange">mt_srand</span></label>
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

  <!-- 02. Random/Randomizer Klasse (ab PHP 8.2) -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. Random/Randomizer Klasse (ab PHP 8.2)</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php
          $randomizer = new \Random\Randomizer();
          $zahlMin = NULL;
          $zahlMax = NULL;
          $randInt = Null;

          // Float
          
          if((isset($_POST["zahlMin"]) && $_POST["zahlMin"] !== "") && (isset($_POST["zahlMax"]) && $_POST["zahlMax"] !== "") ){
            $clean_input_min = str_replace(",", ".", $_POST["zahlMin"]);
            $clean_input_max = str_replace(",", ".", $_POST["zahlMax"]);
            $clean_inputrandint = [$clean_input_min, $clean_input_max];

            if ((is_numeric($clean_input_min)) && (is_numeric($clean_input_max))){
            $randInt = $randomizer->getInt((float)$clean_inputrandint[0], (float)$clean_inputrandint[1]);
            } else {
              $randFloat = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }

          // Float

          if((isset($_POST["zahlMini"]) && $_POST["zahlMini"] !== "") && (isset($_POST["zahlMaxi"]) && $_POST["zahlMaxi"] !== "") ){
            $clean_input_mini = str_replace(",", ".", $_POST["zahlMini"]);
            $clean_input_maxi = str_replace(",", ".", $_POST["zahlMaxi"]);
            $clean_inputrandfloat = [$clean_input_mini, $clean_input_maxi];
          
            if ((is_numeric($clean_input_mini)) && (is_numeric($clean_input_maxi))){

              if($clean_input_mini <= $clean_input_maxi ){
                $randFloat = $randomizer->getFloat((float)$clean_inputrandfloat[0], (float)$clean_inputrandfloat[1], \Random\IntervalBoundary::ClosedClosed);
              }else{
                  $randFloat = htmlspecialchars("Zahl Min muss kleiner oder Gleich Zahl Max sein");
                }
                
            } else {
              $randFloat = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$randomizer = new \Random\Randomizer();</p>
        <p>------ Int ------</p>
        <p>$zahlMin = NULL;<br>$zahlMax = NULL;<br>$randInt = Null;</p>
        <p>------ Float ------</p>
        <p>$zahlMini = NULL;<br>$zahlMaxi = NULL;<br>$randFloat = Null;</p>
    </div>

    <div class="inhalt-container">

      <!-- Randomizer -->
      <div class="box">
        

        <h4>Randomizer</h4>
        <table>
          <tbody >
           <tr>
            <td class="noFlex">$randomizer =</td>
            <td class="noFlex">new \Random\Randomizer();</td>
          </tr>
          <tr>
            <td class="noFlex">var_dump ($randomizer); =</td>
            <td class="noFlex"><span><?php var_dump ($randomizer); ?></span></td>
          </tr></tbody>
        </table>

        <!-- randInt -->
        <h4>randInt</h4>
        <form action="./index.php#2" method="POST">
          <table> 
            <tr>
              <td>
                <p><span class="orange">$randomizer->getInt</span> (</p>
                <input
                  type="number"
                  name="zahlMin"
                  id="zahlMin"
                  placeholder="Zahl Min"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input_min) ? htmlspecialchars($clean_input_min) : ""; ?>"
                >,
                <input
                  type="number"
                  name="zahlMax"
                  id="zahlMax"
                  placeholder="Zahl Max"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input_max) ? htmlspecialchars($clean_input_max) : ""; ?>"
                >)
              </td>

              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input_min,$clean_input_max) ? htmlspecialchars($clean_input_min . " und " . $clean_input_max) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($randInt !== NULL){
                      echo htmlspecialchars($randInt);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="?#2">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>

        <!-- randFloat -->

        <h4 id="randFloat">randFloat</h4>

        <form action="./index.php#randFloat" method="POST">
          <table> 
            <tr>
              <td>
                <p><span class="orange">$randomizer->getFloat</span> (</p>
                <input
                  type="number"
                  name="zahlMini"
                  id="zahlMini"
                  placeholder="Zahl Mini"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input_mini) ? htmlspecialchars($clean_input_mini) : ""; ?>"
                >,
                <input
                  type="number"
                  name="zahlMaxi"
                  id="zahlMaxi"
                  placeholder="Zahl Max"
                  required 
                  max="1000"
                  value="<?php echo isset($clean_input_maxi) ? htmlspecialchars($clean_input_maxi) : ""; ?>"
                >,
              </td>
              <td>\Random\ IntervalBoundary: :ClosedClosed )</td>

              <td>
                <input type="submit" value="Zufallszahl Ermitteln">
                
              </td>
              <td><p>Zufalls Zahl zwischen <?php echo isset($clean_input_mini,$clean_input_maxi) ? htmlspecialchars($clean_input_mini . " und " . $clean_input_maxi) : ""; ?></p></td>
              <td>
                <p> Zufalls Zahl = 
                  <span>
                    <?php if ($randFloat !== NULL){
                      echo htmlspecialchars($randFloat);}
                    ?>
                  </span>
                </p>
              </td>
              <td><a href="?#randFloat">Zurücksetzen</a></td>
            </tr>
          </table>
        </form>
        
          
        
      </div>
    </div>
  </section>
</body>
</html>