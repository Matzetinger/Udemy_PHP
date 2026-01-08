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
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
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

</body>
</html>