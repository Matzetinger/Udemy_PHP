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
    <p><a href="../../Abschnitt_33/Video-Section/index.php">33</a></p>
    <h1>Abschnitt 34</h1>
    <p><a href="../../Abschnitt_35/Video-Section/index.php">35</a></p>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Arrays</a></li>
        <li><a href="#2">02. Variable in Array konvertieren</a></li>
        <li><a href="#3">03. Element zu einen Array Hinzufügen </a></li>
        <li><a href="#4">04. Element aus einen Array Löschen</a></li>
        <li><a href="#5">05. Assoziative Arrays</a></li>
        <li><a href="#6">06. Matrix Arrays (Mehrdimensionale)</a></li>
        <li><a href="#7">07. Arrays iterieren mit for-Schleife und Accumulator Pattern</a></li>
        <li><a href="#8">08. Arrays iterieren mit foreach-Schleife</a></li>
        <li><a href="#9">09. Count und sizeof Arrayelemente Zählen</a></li>
        <li><a href="#10">10. Arrays prüfen mit isset, empty, is_array und in_array</a></li>
        <li><a href="#11">11. array_map - Erzeugt ein neues Array mit veränderten Werten</a></li>
        <li><a href="#12">12. array_walk - Verändert die Werte im bestehenden Array</a></li>
        <li><a href="#13">13. array_push, _unshift, _pop, _shift</a></li>
        <li><a href="#14">14. array_slice, _splice</a></li>
        <li><a href="#15">15. array_merge, array_merge_recursive und array_replace_recursive = Zusammenfügen (überschreiben) von Arrays</a></li>
        <li><a href="#16">16. array_combine = Kombiniert Arrays 1 Array Keys und 2 Array Elemente/a></li>
        <li><a href="#17">17. Array_key_exists prüft ob ein key im Array existiert</a></li>
        <li><a href="#18">18. </a></li>
        <li><a href="#19">19. </a></li>
        <li><a href="#20">20. </a></li>
      </ul>
    </div>
  </section>

  <!-- 1. Arrays -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>1. Arrays</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $kiste = ["Bälle",3,true,false,"Golf"];
        ?>
        <p>$kiste = ["Bälle",3,true,false,"Golf"]; <br> <span class="grau"> -- Schreibweise vor Php 5.4 -- <br> $kiste = array("Bälle",3,true,false,"Golf");</span> </p>
    </div>

    <div class="inhalt-container">

      <!-- Array -->
      <div class="box">
        <h4>Array</h4>
        
        <p>var_dump($kiste) =
          <span>
            <?php
                var_dump($kiste);
            ?>
          </span>
        </p>

        <p>----------------------</p>

        <p>echo $kiste[4] = 
          <span>
            <?php
               echo $kiste[4];
            ?>
          </span>
        </p> 
      </div>
    </div>
  </section>

  <!-- 2. Variable in Array konvertieren -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>2. Variable in Array konvertieren</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $name = "IOSIF";
          $name2 = "Matze";
          
        ?>
        <p>$name = "IOSIF";<br>$name2 = "Matze";</p>
    </div>

    <div class="inhalt-container">

      <!-- konvertieren -->
      <div class="box">
        <h4>konvertieren</h4>
        <p>var_dump($name) = 
          <span>
            <?php
              var_dump($name);
            ?>
          </span>
        </p>
        <p>----------------------</p>
        
        <p><span class="orange">$konvert = array($name);</span><br>oder<br><span class="orange">$konvert[ ] = $name;</span></p>

        <p>var_dump($konvert) = 
          <span>
            <?php
              $konvert = array($name);
              var_dump($konvert);
            ?>
          </span>
        </p>
      </div>

      <!-- konvertieren setype -->
      <div class="box">
        <h4>konvertieren settype</h4>
        <p>var_dump($name2) = 
          <span>
            <?php
              var_dump($name2);
            ?>
          </span>
        </p>
        <p>----------------------</p>
        <p><span class="orange">settype($name2,"array");</span> <br> var_dump($name2) =
          <span>
            <?php
              settype($name2,"array");
              var_dump($name2);
            ?>
          </span>
        </p>
      </div>
    </div>
  </section>

  <!-- 3. Element zu einen Array Hinzufügen -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>3. Element zu einen Array Hinzufügen</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $hinzufügen = [];
        ?>
        <p>$hinzufügen = [];</p>
    </div>

    <div class="inhalt-container">

      <!-- Hinzufügen -->
      <div class="box">
        <h4>Hinzufügen</h4>
        <p> var_dump($hinzufügen) = <span><?php var_dump($hinzufügen); ?></span></p>
        
        <p><span class="orange">$hinzufügen[ ] = "Weltrichter";</span><br>
            <span class="orange">$hinzufügen[ ] = "IOSIF";</span><br>
          var_dump($hinzufügen) =
          <span>
            <?php
            $hinzufügen[] = "Weltrichter";
            $hinzufügen[] = "IOSIF";
              var_dump($hinzufügen);
            ?>
          </span>
        </p>
        <p>----------------------</p>
        <p><span class="orange">array_push($hinzufügen, "Gott");</span> <br> var_dump($hinzufügen) = <span><?php array_push($hinzufügen, "Gott"); var_dump($hinzufügen); ?></span></p>
      </div>
    </div>
  </section>

  <!-- 4. Element aus einen Array Löschen -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>4. Element aus einen Array Löschen</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $löschen = ["Null", "Eins", "Zwei", "Drei"];
        ?>
        <p>$löschen = ["Null", "Eins", "Zwei", "Drei"];</p>
    </div>

    <div class="inhalt-container">

      <!-- Löschen -->
      <div class="box">
        <h4>Löschen</h4>
        <p> var_dump($löschen) =<span><?php var_dump($löschen);?></span></p>

        <p><span class="orange">unset($löschen[0]);</span>  <br> var_dump($löschen) =
          <span>
            <?php
            unset($löschen[0]);
            var_dump($löschen);
            ?>
          </span>
        </p>
      </div>
    </div>
  </section>

  <!-- 5. Assoziative Arrays -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>5. Assoziative Arrays</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $weltrichter = [
            "Name" => "IOSIF",
            "Wohnort" => "Frankfurt"
          ];
        ?>
        <p>$weltrichter = [ <br>
            <span class="orange">"Name" => "IOSIF",</span> <br>
            <span class="orange">"Wohnort" => "Frankfurt"</span><br>
          ];</p>
          <p><span class="grau">-- Alte Schreibweise --  <br>
          $weltrichter = array( <br>
            "Name" => "IOSIF",<br>
            "Wohnort" => "Frankfurt"<br>
          );</span></p>
    </div>

    <div class="inhalt-container">

      <!-- Assoziative -->
      <div class="box">
        <h4>Assoziative</h4>
        <p>var_dump($weltrichter) =
            <span><?php
            var_dump($weltrichter);
            ?>
          </span>
        </p>
        <p>----------------------</p>
        <p>echo $weltrichter["Name"] = <span><?php echo $weltrichter["Name"] ?></span></p>
      </div>

      <!-- Hinzufügen -->
      <div class="box">
        <h4>Hinzufügen</h4>
        <p><span class="orange">$weltrichter["web"] = "Menschenort.de";</span><br>
            var_dump($weltrichter) =
           <span>
            <?php
            $weltrichter["web"] = "Menschenort.de";
              var_dump($weltrichter);
            ?>
          </span>
        </p>
       
      </div>

      <!-- Assoziative Array Erstellen mit weiterer Methode -->
      <div class="box">
        <h4>Assoziative Array Erstellen mit weiterer Methode</h4>
        <p><span class="orange">$hybride["name"] = "wertlos";</span><br>
            var_dump($hybride) =
           <span>
            <?php
              $hybride["name"] = "wertlos";
              var_dump($hybride);
            ?>
          </span>
        </p>

        <!-- Löschen -->
        <h4>Löschen</h4>
        <p><span class="orange">unset($hybride["name"]);</span><br>
            var_dump($hybride) =
           <span>
            <?php
              unset($hybride["name"]);
              var_dump($hybride);
            ?>
          </span>
        </p>
       
      </div>
    </div>
  </section>

  <!-- 6. Matrix Arrays (Mehrdimensionale) -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>6. Matrix Arrays (Mehrdimensionale)</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $matrix = [
            [1,2,3],
            [4,5,6],
          ];
          $people = [
              "Markus" => [
                "Alter" => 18,
                "Stadt" => "Straubing",
              ],
              "Sabine" => [  
                "Alter" => 20,
                "Stadt" => "Berlin",
              ],
             ]
        ?>
        <p> $matrix = [ <br>
            [1,2,3], <span class="grau">[0]</span> <br>
            [4,5,6] <span class="grau">[1]</span><br>
          ];</p>
          <p>Assoziative Array</p>
          <p>$people = [ <br>
              "Markus" => [  <br>
                "Alter" => 18, <br>
                "Stadt" => "Straubing", <br>
                ] <br>
              "Sabine" => [  <br>
                "Alter" => 20, <br>
                "Stadt" => "Berlin", <br>
                ] <br>
             ]</p>
    </div>

    <div class="inhalt-container">

      <!-- Matrix -->
      <div class="box">
        <h4>Matrix</h4>
        
        <p>var_dump($matrix) =
          <span>
            <?php
               var_dump($matrix);
               var_dump($people);
            ?>
          </span>
        </p>

        <p>var_dump($people) =
          <span>
            <?php
               var_dump($people);
            ?>
          </span>
        </p>

      </div>

      <!-- Matrix gezielte Ausgabe -->
      <div class="box">
        <h4>Matrix gezielte Ausgabe</h4>
        
        <p>var_dump($matrix[1][2]) =
          <span>
            <?php
               var_dump($matrix[1][2]);
            ?>
          </span>
        </p>

      </div>
      <!-- Matrix gezielte Ausgabe Assoziative -->
      <div class="box">
        <h4>Matrix gezielte Ausgabe Assoziative</h4>
        
        <p>var_dump($people["Markus"]["Alter"]) =
          <span>
            <?php
               var_dump($people["Markus"]["Alter"]);
            ?>
          </span>
        </p>

      </div>
    </div>
  </section>

  <!-- 7. Arrays iterieren mit for-Schleife -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>7. Arrays iterieren mit for-Schleife und Accumulator Pattern</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $iterieren = ["Grün", "Rot", "Blau"];
          $rechnen = [1,2,3];
          $ergebnis = 0;
          $matrix1 = [
            ["Array[0] Index[0]", "Array[0] Index[1]"],
            ["Array[1] Index[0]", "Array[1] Index[1]"],
          ];
        ?>
        <p>$iterieren = ["Grün", "Rot", "Blau"]; <br> $rechnen = [1,2,3];<br>$ergebnis = 0; <br> 
      $matrix1 = [ <br>
            ["Array[0] Index[0]", "Array[0] Index[1]"],<br>
            ["Array[1] Index[0]", "Array[1] Index[1]"],<br>
          ];</p>
    </div>

    <div class="inhalt-container">

      <!-- iterieren -->
      <div class="box">
        <h4>Iterieren for-Schleife</h4>

        <pre>
          <span class="rot">for</span>($i = 0; $i < count($iterieren); $i++){
                echo "Die Farbe ist $iterieren[$i] < br >";
           } =
        </pre>

        <p>
          <span>
            <?php
              for($i = 0; $i < count($iterieren); $i++){
                echo "Die Farbe ist $iterieren[$i] <br>";
              }
            ?>
          </span>
        </p>
      </div>

      <!-- iterieren über Matrix -->
      <div class="box">
        <h4>Iterieren über Matrix Array</h4>

        <pre>
          <span class="rot">for</span>($m = 0; $m < count($matrix1); $m++){
                <span class="rot">for</span>($m1 = 0; $m1 < count($matrix1[$m]); $m1++){
                  echo $matrix1[$m][$m1] . "< br >";
                }
           } =
        </pre>

        <p>
          <span>
            <?php
              for($m = 0; $m < count($matrix1); $m++){
                for($m1 = 0; $m1 < count($matrix1[$m]); $m1++){
                  echo $matrix1[$m][$m1] . "<br>";
                }
              }
            ?>
          </span>
        </p>
      </div>

      <!-- accumulator Pattern -->
      <div class="box">
        <h4>Accumulator Pattern</h4>

        <pre>
          <span class="rot">for</span>($r=0; $r < count($rechnen); $r++){
                $ergebnis += $rechnen[$r];
           };
           
        </pre>

        <p>echo $ergebnis =
          <span>
            <?php
              for($r=0; $r < count($rechnen); $r++){
                $ergebnis += $rechnen[$r];
              };
              echo $ergebnis;
            ?>
          </span>
        </p>
       </div>

    </div>
  </section>

  <!-- 8. Arrays iterieren mit foreach-Schleife -->
  <section id="8" class="section">
    <div class="text-box">
      <h2>8. Arrays iterieren mit foreach-Schleife</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahlenbox = [1,2,3];
          $zahlenmatrix = [
            [1,2],
            [1,2,3],
            [1,2,3,4],
          ];
          $assArray = [
            "Index[0]" => " Hallo[0]",
            "Index[1]" => " Du[1]"
          ];
        ?>
        <p>$zahlenbox = [1,2,3]; <br> <br> $zahlenmatrix = [ <br>
            [1,2],<br>
            [1,2,3],<br>
            [1,2,3,4],<br>
          ] <br> <br>
           $assArray = [<br>
            "Index[0]" => " Hallo[0]",<br>
            "Index[1]" => " Du[1]"<br>
          ];
        
        </p>
    </div>

    <div class="inhalt-container">

      <!-- iterieren foreach -->
      <div class="box">
        <h4>Iterieren foreach-Schleife</h4>

        <pre>
          <span class="rot">foreach</span> ($zahlenbox as $zahl) {
                echo $zahl;
           } =
        </pre>

        <p>
          <span>
            <?php
              foreach ($zahlenbox as $zahl) {
                echo $zahl . "<br>";
              }
            ?>
          </span>
        </p>
      </div>

      <!-- iterieren über Matrix mit foreach -->
      <div class="box">
        <h4>Iterieren über Matrix mit foreach</h4>

        <pre>
          <span class="rot">foreach</span> ($zahlenmatrix as $row) {
                <span class="rot">foreach</span> ($row as $element){
                  echo $element;
                }
           }=
        </pre>

        <p>
          <span>
            <?php
              foreach ($zahlenmatrix as $row) {
                foreach($row as $element){
                  echo $element;
                }
              }
            ?>
          </span>
        </p>
      </div>

      <!-- iterieren über Assoziative Array mit foreach -->
      <div class="box">
        <h4>Iterieren über Assoziative Array mit foreach</h4>

        <pre>
          <span class="rot">foreach</span> ($assArray as $index => $wert) {
                echo $index . $wert . "< br >";
           } =
        </pre>

        <p>
          <span>
            <?php
              foreach ($assArray as $index => $wert) {
                echo $index . $wert . "<br>";
              }
            ?>
          </span>
        </p>
      </div>

      <!-- iterieren über Assoziative Matrix Array mit foreach -->
      <div class="box">
        <h4>Iiterieren über Assoziative Matrix Array mit foreach</h4>

        <pre>
          <span class="rot">foreach</span> ($people as $namen => $details) {
                echo $namen; 
                <span class="rot">foreach</span> ($details as $detail => $value){
                  echo $value;
                }
                echo "< br >";
           } =
        </pre>

        <p>
          <span>
            <?php
              foreach ($people as $namen => $details) {
                echo $namen; 
                foreach ($details as $detail => $value){
                  echo $value;
                }
                echo "<br>";
              }
            ?>
          </span>
        </p>
        <p>Array ist von <a href="#6">06. Matrix Arrays (Mehrdimensionale)</a></p>
      </div>

    </div>
  </section>

  <!-- 9. Count und sizeof Arrayelemente Zählen -->
  <section id="9" class="section">
    <div class="text-box">
      <h2>9. Count und sizeof Arrayelemente Zählen</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $boxinhalt = [1,"Wahrheit",true,];
        ?>
        <p>$boxinhalt = [1,"Wahrheit",true,];</p>
    </div>

    <div class="inhalt-container">

      <!-- Count -->
      <div class="box">
        <h4>count</h4>
        <p> echo <span class="orange">count</span>($boxinhalt) = <span><?php echo count($boxinhalt); ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
      </div>

      <!-- sizeof -->
      <div class="box">
        <h4>sizeof</h4>
        <p> echo <span class="orange">sizeof</span>($boxinhalt) = <span><?php echo sizeof($boxinhalt); ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
      </div>
    </div>
  </section>

  <!-- 10. Arrays prüfen mit isset, empty, is_array und in_array -->
  <section id="10" class="section">
    <div class="text-box">
      <h2>10. Arrays prüfen mit isset, empty, is_array und in_array</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $container = ["Ball", "Maus", "Box"];
          $string = "String";
        ?>
        <p>$container = ["Ball", "Maus", "Box"]; <br> $string = "String";</p>
    </div>

    <div class="inhalt-container">

      <!-- isset -->
      <div class="box">
        <h4>isset</h4>
        <p>echo <span class="orange">isset</span>($container) ? "Es gibt Elemente" : "Es gibt keine Elemente"; = <span><?php echo isset($container) ? "Es gibt Elemente" : "Es gibt keine Elemente";  ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
        <p>kann man Prüfen mit echo, var_dump oder var_export </p>
      </div>

      <!-- isset Matrix -->
      <div class="box">
        <h4>isset Matrix</h4>
        <p>var_dump(<span class="orange">isset</span>($matrix[1])); = <span><?php var_dump(isset($matrix[1])) ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
        <p>Array ist von <a href="#6">06. Matrix Arrays (Mehrdimensionale)</a></p>
        <p>kann man Prüfen mit echo, var_dump oder var_export </p>
      </div>

      <!-- empty -->
      <div class="box">
        <h4>empty</h4>
        <p>Prüft ob eine Variable einen "falsy"-Wert hat bzw. leer ist</p>
        <p>var_export(<span class="orange">empty</span>($container)); = <span><?php var_export(empty($container)); ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
        <p>kann man Prüfen mit echo, var_dump oder var_export </p>
      </div>

      <!-- is_array -->
      <div class="box">
        <h4>is_array</h4>
        <p>Prüft ob eine Variable ein Array ist</p>
        <p>var_export(<span class="orange">is_array</span>($container)); = <span><?php var_export(is_array($container)); ?></span></p>
        <p>var_export(<span class="orange">is_array</span>($string)); = <span><?php var_export(is_array($string)); ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
        <p>es gibt auch mehrere is_ zb. is_string, is_integer usw.</p>
        <p>kann man Prüfen mit echo, var_dump oder var_export </p>
      </div>

      <!-- in_array -->
      <div class="box">
        <h4>in_array</h4>
        <p>Prüft ob ein gewisser wert im Array enthalten ist</p>
        <p>var_export(<span class="orange">in_array</span>("Ball", $container)); = <span><?php var_export(in_array("Ball", $container)); ?></span></p>
        <p>Bei Matrix-Arrays [index] angeben und bei Assoziative den ["Index-Name"]</p>
        <p>kann man Prüfen mit echo, var_dump oder var_export </p>
      </div>

    </div>
  </section>

  <!-- 11. array_map - Erzeugt ein neues Array mit veränderten Werten -->
  <section id="11" class="section">
    <div class="text-box">
      <h2>11. array_map - Erzeugt ein neues Array mit veränderten Werten</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $numbers = [1, 2, 3, 4, 5];
        ?>
        <p>$numbers = [1, 2, 3, 4, 5];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_map -->
      <div class="box">
        <h4>array_map</h4>
        <pre>
          <span class="blau">function</span> double($n){
            <span class="rot">return</span> $n * 2;
          };

          $newArray = <span class="orange">array_map</span>("double", $numbers);</pre>
        <p>
          <?php 
          function double($n){
            return $n * 2;
          };

          $newArray = array_map("double", $numbers);
          ?>
        </p>
        <p>----------------------</p>
        <p>var_export($newArray) = <span><?php var_export($newArray); ?></span></p>
      </div>

    </div>
  </section> 

  <!-- 12. array_walk - Verändert die Werte im bestehenden Array -->
  <section id="12" class="section">
    <div class="text-box">
      <h2>12. array_walk - Verändert die Werte im bestehenden Array</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $walk = [1, 2, 3, 4, 5];
        ?>
        <p>$walk = [1, 2, 3, 4, 5];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_walk-->
      <div class="box">
        <h4>array_walk</h4>
        <pre>
          <span class="blau">function</span> verdoppeln(&$h){
             $h *= 2;
          };

          <span class="orange">array_walk</span>($walk, "verdoppeln");</pre>
        <p>
          <?php 
          function verdoppeln(&$h){
            $h *= 2;
          };

          array_walk($walk, "verdoppeln");
          ?>
        </p>
        <p>----------------------</p>
        <p>print_r($walk) = <span><?php print_r($walk); ?></span></p>
      </div>

    </div>
  </section>

  <!-- 13. array_push, _unshift, _pop, _shift  -->
  <section id="13" class="section">
    <div class="text-box">
      <h2>13. array_push, _unshift, _pop, _shift</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $array = [1, 2, 3, 4, 5];
        ?>
        <p>$array = [1, 2, 3, 4, 5];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_push-->
      <div class="box">
        <h4>array_push</h4>
        
        <p><span class="orange">array_push</span>($array, "Hinzufügen am Ende"); =
          <?php 
          array_push($array, "Hinzufügen am Ende");
          ?>
        </p>
        <p>print_r($array) = <span><?php print_r($array); ?></span></p>
      </div>

      <!-- array_unshift-->
      <div class="box">
        <h4>array_unshift</h4>
        
        <p><span class="orange">array_unshift</span>($array, "Hinzufügen am Anfang"); =
          <?php 
          array_unshift($array, "Hinzufügen am Anfang");
          ?>
        </p>
        <p>print_r($array) = <span><?php print_r($array); ?></span></p>
      </div>

      <!-- array_pop-->
      <div class="box">
        <h4>array_pop</h4>
        
        <p><span class="orange">array_pop</span>($array); =
          <?php 
          array_pop($array);
          ?>
        </p>
        <p>print_r($array) = <span><?php print_r($array); ?></span></p>
        <p>array_pop entfernt das letzte Element</p>
      </div>

      <!-- array_shift-->
      <div class="box">
        <h4>array_shift</h4>
        
        <p><span class="orange">array_shift</span>($array); =
          <?php 
          array_shift($array);
          ?>
        </p>
        <p>print_r($array) = <span><?php print_r($array); ?></span></p>
        <p>array_shift entfernt das erste Element</p>
      </div>

    </div>
  </section>

  <!-- 14. array_slice, _splice  -->
  <section id="14" class="section">
    <div class="text-box">
      <h2>14. array_slice, _splice</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $slice = [1, 2, 3, 4, 5];
          $splice = [1, 2, 3, 4, 5];
        ?>
        <p>$slice = [1, 2, 3, 4, 5]; <br> $splice = [1, 2, 3, 4, 5];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_slice-->
      <div class="box">
        <h4>array_slice</h4>
        
        <p>$subset = <span class="orange">array_slice</span>($slice, 1, 3, true); =
          <?php 
          $subset = array_slice($slice, 1, 3, true);
          ?>
        </p>
        <p>print_r($subset) = <span><?php print_r($subset); ?></span></p>
        <p>array_slice(start, länge, true), wenn start oder länge negativ (-wert) ist, zählt er vom Ende rückwärts.</p>
        <p>true = Schlüssel beibehalten</p>
        <p>Kopiert einen Ausschnitt des Arrays in ein neues Array, ohne das Original zu verändern.</p>
        <p>print_r($slice) = <span><?php print_r($slice); ?></span></p>
      </div>

      <!-- array_slice-->
      <div class="box">
        <h4>array_splice</h4>
        
        <p>$ausschneiden = <span class="orange">array_splice</span>($splice, 2, 3, ["ersetzt", "ersetzt", "ersetzt"]); =
          <?php 
          $ausschneiden = array_splice($splice, 2, 3, ["ersetzt", "ersetzt", "ersetzt"]);
          ?>
        </p>
        <p>print_r($ausschneiden) = <span><?php print_r($ausschneiden); ?></span></p>
        <p>array_splice(start, länge, ersetztende werte), wenn start oder länge negativ (-wert) ist, zählt er vom Ende rückwärts.</p>
        <p>Entfernt einen Ausschnitt des Original-Arrays und fügt es in ein neues Array, das Original wird verändert.</p>
        <p>print_r($splice) = <span><?php print_r($splice); ?></span></p>
      </div>

    </div>
  </section>

  <!-- 15. array_merge, array_merge_recursive und array_replace_recursive = Zusammenfügen (überschreiben) von Arrays  -->
  <section id="15" class="section">
    <div class="text-box">
      <h2>15. array_merge, array_merge_recursive und array_replace_recursive = Zusammenfügen (überschreiben) von Arrays</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $box1 = ["0:box1", "1:box1", "2:box1"];
          $box2 = ["0:box2", "1:box2", "2:box2"];
          $ass = ["a" => "A", "b" => "C",];
          $ass1 = ["a" => "B", "b" => "D",];
        ?>
        <p>$box1 = ["0:box1", "1:box1", "2:box1"]; <br> $box2 = ["0:box2", "1:box2", "2:box2"];</p>
        <p>----------------------</p>
        <p>$ass = ["a" => "A", "b" => "C",]; <br> $ass1 = ["a" => "B", "b" => "D",];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_merge-->
      <div class="box">
        <h4>array_merge</h4>
        
        <p>$box3 = <span class="orange">array_merge</span>($box1, $box2); <br> print_r($box3); = 
          <span>
            <?php 
            $box3 = array_merge($box1, $box2);
            print_r($box3);
            ?>
          </span>
        </p>
      </div>

      <!-- array_merge_recursive-->
      <div class="box">
        <h4>ararray_merge_recursive</h4>
        
        <p>$newAss = <span class="orange">array_merge_recursive</span>($ass, $ass1); <br> print_r($newAss); = 
          <span>
            <?php 
            $newAss = array_merge_recursive($ass, $ass1);
            print_r($newAss);
            ?>
          </span>
        </p>
      </div>

      <!-- array_replace_recursive-->
      <div class="box">
        <h4>array_replace_recursive</h4>
        
        <p>$newAss = <span class="orange">array_replace_recursive</span>($ass, $ass1); <br> print_r($newAss); = 
          <span>
            <?php 
            $newAss = array_replace_recursive($ass, $ass1);
            print_r($newAss);
            ?>
          </span>
        </p>
      </div>

      <!-- array_merge bei Assoziative-->
      <div class="box">
        <h4>array_merge bei Assoziative</h4>
        
        <p>$newAss = <span class="orange">array_merge</span>($ass, $ass1); <br> print_r($newAss); = 
          <span>
            <?php 
            $newAss = array_merge($ass, $ass1);
            print_r($newAss);
            ?>
          </span>
        </p>
      </div>

    </div>
  </section>

  <!-- 16. array_combine Kombiniert Arrays 1 Array Keys und 2 Array Elemente -->
  <section id="16" class="section">
    <div class="text-box">
      <h2>16. array_combine Kombiniert Arrays 1 Array Keys und 2 Array Elemente</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $key = ["zahl1", "zahl2", "zahl3"];
          $elemente = [3,4,5];
        ?>
        <p>$key = ["zahl1", "zahl2", "zahl3"]; <br> $elemente = [3,4,5];</p>
    </div>

    <div class="inhalt-container">

      <!-- array_combine-->
      <div class="box">
        <h4>array_combine</h4>
        
        <p>$kombiniert = <span class="orange">array_combine</span>($key, $elemente); <br> print_r($kombiniert); = 
          <span>
            <?php 
            $kombiniert = array_combine($key, $elemente);
            print_r($kombiniert);
            ?>
          </span>
        </p>
      </div>

    </div>
  </section>

  <!-- 17. Array_key_exists prüft ob ein key im Array existiert -->
  <section id="17" class="section">
    <div class="text-box">
      <h2>17. Array_key_exists prüft ob ein key im Array existiert</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $matthias = ["Stadt" => null, "Alter" => 38, "Ort" => "Haselbach"];
        ?>
        <p>$matthias = ["Stadt" => null, "Alter" => 38, "Ort" => "Haselbach"];</p>
    </div>

    <div class="inhalt-container">

      <!-- Array_key_exists-->
      <div class="box">
        <h4>Array_key_exists</h4>
        
        <p>echo <span class="orange">array_key_exists</span>("Stadt", $matthias) ? "Der Key existiert" : "Der Key existiert nicht"; = 
          <span>
            <?php 
            echo array_key_exists("Stadt", $matthias) ? "Der Key existiert" : "Der Key existiert nicht";
            
            ?>
          </span>
        </p>
        <p>Der Unterschied: isset prüft zusätzlich, dass der Wert nicht null ist, während array_key_exists auch null als existierenden Key akzeptiert.</p>
      </div>

    </div>
  </section>

</body>
</html>