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
        <li><a href="#3">03. </a></li>
        <li><a href="#4">04. </a></li>
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
  <section id="2" class="section1">
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

  
</body>
</html>
