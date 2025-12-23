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
        <li><a href="#2">02. Variable in Array konvertieren + Hinzufügen</a></li>
        <li><a href="#3">03. </a></li>
        <li><a href="#4">04. </a></li>
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
        <p>$kiste = ["Bälle",3,true,false,"Golf"] <br> <span class="grau"> -- Schreibweise vor Php 5.4 -- <br> $kiste = array("Bälle",3,true,false,"Golf");</span> </p>
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

  <!-- 2. Variable in Array konvertieren + Hinzufügen-->
  <section id="2" class="section">
    <div class="text-box">
      <h2>2. Variable in Array konvertieren + Hinzufügen</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $name = "IOSIF";
          $name2 = "Matze";
          $hinzufügen = [];
        ?>
        <p>$name = "IOSIF";<br>$name2 = "Matze";<br>$hinzufügen = [ ];</p>
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
        
        <p>$konvert = array($name)<br>oder<br>$konvert[ ] = $name;</p>

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
        <p>settype($name2,"array") <br> var_dump($name2) =
          <span>
            <?php
              settype($name2,"array");
              var_dump($name2);
            ?>
          </span>
        </p>
      </div>

      <!-- Hinzufügen -->
      <div class="box">
        <h4>Hinzufügen</h4>
        <p>$hinzufügen[ ] = "Weltrichter";<br>
            $hinzufügen[ ] = "IOSIF";<br>
            $hinzufügen[ ] = "Gott"; <br>
          var_dump($hinzufügen) =
          <span>
            <?php
            $hinzufügen[] = "Weltrichter";
            $hinzufügen[] = "IOSIF";
            $hinzufügen[] = "Gott";
              var_dump($hinzufügen);
            ?>
          </span>
        </p>
      </div>
    </div>
  </section>

</body>
</html>