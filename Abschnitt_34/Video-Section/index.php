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

</body>
</html>