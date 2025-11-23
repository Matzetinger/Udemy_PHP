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
    <h6><a href="../../Abschnitt_30/Video-Section/index.php">30</a></h6>
    <h1>Abschnitt 31</h1>
    <h6><a href="../../Abschnitt_32/Video-Section/index.php">32</a></h6>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Strings Verbinden . </a></li>
        <li><a href="#2">02. Auf einzelne Zeichen von Strings zugreifen []</a></li>
        <li><a href="#3">03. Strings vergleichen</a></li>
        <li><a href="#4">04. Strings alphabetisch sortieren</a></li>
        <li><a href="#5">05. </a></li>
        <li><a href="#6">06. </a></li>
        <li><a href="#7">07. </a></li>
        <li><a href="#8">08. </a></li>
        <li><a href="#9">09. </a></li>
        <li><a href="#10">10. </a></li>
        <li><a href="#11">11. </a></li>
        <li><a href="#12">12. </a></li>
        <li><a href="#13">13. </a></li>
        <li><a href="#14">14. </a></li>
      </ul>
      </div>
  </section>

  <!-- 1. String miteinander Verbinden -->
  <section id="1" class="section1">
    <div class="text-box">
      <h2>1. Strings Verbinden .</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Strings Verbinden -->
      <div class="box">
        <h4>String Verbinden</h4>
        <?php 
          $var = "Vollkommen ist gleich ";
          $var2 = "34 Göttliche Protokolle"
        ?>
        <p>$var = "Vollkommen ist gleich"<br>$var2 = "34 Göttliche Protokolle" <br>echo $var . $var2 = <span><?= $var . $var2 ?></span></p>
      </div>
    </div>
  </section>

  <!-- 2. Auf einzelne Zeichen von Strings zugreifen -->
  <section id="2" class="section2">
    <div class="text-box">
      <h2>2. Auf einzelne Zeichen von Strings zugreifen []</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Auf Zeichen zugreifen -->
      <div class="box">
        <h4>Auf einzelnes Zeichen zugreifen</h4>
        <?php 
          $zeichen = "Logik ";
        ?>
        <p>$zeichen = "Logik "<br> echo $zeichen[0]; = <span><?= $zeichen[0]; ?></span></p>
        <p>echo $zeichen[1]; = <span><?= $zeichen[1] ?></span></p>
        <p>echo $zeichen[2]; = <span><?= $zeichen[2] ?></span></p>
        <p>echo $zeichen[3]; = <span><?= $zeichen[3] ?></span></p>
        <p>echo $zeichen[4]; = <span><?= $zeichen[4] ?></span></p>
        <p>var_dump ($zeichen[5]); = <span><?php var_dump ($zeichen[5]); ?></span></p>
      </div>
    </div>
  </section>

  <!-- 3. Vergleichen von Strings -->
  <section id="3" class="section3">
    <div class="text-box">
      <h2>3. Vergleichen von Strings</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

    <!-- Strings Gleich -->
      <div class="box">
        <h4>Strings Gleich</h4>
        <?php 
        $string1 = "Gerechtigkeit";
        $string2 = "Gerechtigkeit";
          
        ?>
        <p>$string1 = "Gerechtigkeit"<br>$string2 = "Gerechtigkeit" <br> $string1 === $string2 ? "Gleich" : "Ungleich" = <span><?= $string1 === $string2 ? "Gleich" : "Ungleich";  ?></span></p>
        <p>Auch Leerzeichen werden Berücksichtigt</p>
      </div>

      <!-- Strings Ungleich -->
      <div class="box">
        <h4>Strings Ungleich</h4>
        <?php 
        $string3 = "Gerechtigkeit";
        $string4 = "Ungerechtigkeit";
          
        ?>
        <p>$string3 = "Gerechtigkeit"<br>$string4 = "Ungerechtigkeit" <br> $string3 === $string4 ? "Gleich" : "Ungleich" = <span><?= $string3 === $string4 ? "Gleich" : "Ungleich";  ?></span></p>
      </div>

      <!-- Lexikalisch Vergleichen -->
      <div class="box">
        <h4>Lexikalischer Vergleich</h4>
        <?php 
        $string5 = "A";
        $string6 = "Z";
        ?>
        <p>$string5 = "A" <br> $string6 = "Z"</p>
        <p>$string5 < $string6 ? "$string5 kommt vor $string6" : "$string5 kommt nach $string6" = <span><?= $string5 < $string6 ? "$string5 kommt vor $string6" : "$string5 kommt nach $string6";  ?></span></p>
        <p></p>
      </div>
    </div>
  </section>
  
  <!-- Strings alphabetisch sortieren -->
  <section id="4" class="section4">
    <div class="text-box">
      <h2>4. Strings alphabetisch sortieren</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
      <a href="https://www.charset.org/utf-8" target="_blank" rel="noopener noreferrer">Unicode UTF-8 - Zeichentabelle</a>
    </div>
    <div class="inhalt-container">

      <!-- Strings sortieren -->
      <div class="box">
        <h4>sort</h4>
        <?php 
          $array = ["F", "C", "B", "D", "E", "aaaa"];
          sort($array)
        ?>
        <p>$array = ["F", "C", "b", "D", "E", "A"]<br>sort($array)<br>var_export($array) = <span><?php var_export($array) ?></span></p>
        <p>Groß und kleinschreibung spielt eine Rolle</p>
      </div>

      <!-- Strings sortieren mit usort -->
      <div class="box">
        <h4>usort</h4>
        <?php 
          $array1 = ["F", "C", "B", "D", "E", "aaaa"];
          usort($array1, function($a, $b){
            return strtolower($a) <=> strtolower($b);
          });
          
        ?>
        <p>$array1 = ["F", "C", "b", "D", "E", "A"]<br>usort($array1, function($a, $b){return strtolower($a) <=> strtolower($b);});<br>var_export($array1) = <span><?php var_export($array1) ?></span></p>
        <p>strtolower = Zeichenkette in Kleinbuchstaben umwandeln</p>
      </div>
    </div>
  </section>

  
</body>
</html>
