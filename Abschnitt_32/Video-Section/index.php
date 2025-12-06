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
    <h6><a href="../../Abschnitt_31/Video-Section/index.php">31</a></h6>
    <h1>Abschnitt 32</h1>
    <h6><a href="../../Abschnitt_33/Video-Section/index.php">33</a></h6>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. if elseif else Anweisung</a></li>
        <li><a href="#2">02. </a></li>
        <li><a href="#3">03. </a></li>
        <li><a href="#4">04. </a></li>
        
      </ul>
    </div>
  </section>

  <!-- 1. if elseif else Anweisung -->
  <section id="1" class="section1">
    <div class="text-box">
      <h2>1. if elseif else Anweisung</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $alter = 18;
          $fsk = 18;
          $zahl = 10;
          $wort = "Weltrichter";
          $wort1 = "Protokolle";
         ?>
        <p>$alter = 18;<br>$fsk = 18; <br>  $zahl = 10; <br> $wort = "Weltrichter" <br> $wort1 = "Protokolle"</p>
      
    </div>
    <div class="inhalt-container">

      <!-- if-else Anweisung -->
      <div class="box">
        <h4> if-else Anweisung </h4>
        <p><span class="rot">if</span>($alter >= $fsk){ <br> echo "Du kannst den Film sehen"; <br> } <br> <span class="rot">else</span> {echo "Du kannst den Film nicht sehen"; <br> } =
        <span>
          <?php 
          if ($alter >= $fsk){
            echo "Du kannst den Film sehen";
          }
          else {
            echo "Du kannst den Film nicht sehen";
          } ?>
        </span></p>
      </div>
      
      <!-- if elseif else Anweisung -->
      <div class="box">
        <h4>if elseif else Anweisung</h4>
        <p><span class="rot">if</span>($zahl < 8){ <br> echo "Die Zahl $zahl ist kleiner als 8"; <br> } <br> <span class="rot">elseif</span>($zahl === 8){ <br> echo "Die Zahl $zahl ist gleich 8"; <br> } <br> <span class="rot">else</span>{ <br> echo "die Zahl $zahl ist größer als 8"; <br> } = 
        <span>
          <?php 
          if($zahl < 8){
            echo "Die Zahl $zahl ist kleiner als 8";
          }
          elseif($zahl === 8){
            echo "Die Zahl $zahl ist gleich 8";}
          else{
            echo "Die Zahl $zahl ist größer als 8";
          } ?>
          </span></p>
      </div>

      <!-- if elseif else Anweisung Html -->
      <div class="box">
        <h4>if elseif else Anweisung mit HTML vermischt</h4>
        <p>php <span class="rot">if</span>($wort === $wort1): ?></p>
        <p>p> Die Variablenwerte sind gleich /p> </p>
        <p>php <span class="rot">else</span> : ?></p>
        <p> p> Die Variablenwerte sind nicht Gleich /p> </p>
        <p>?php <span class="rot">endif</span> ; ?> = </p>

        <?php if($wort === $wort1): ?>
          <p class="gelb">Die Variablenwerte sind gleich </p>
        <?php else : ?>
          <p class="gelb">Die Variablenwerte sind nicht Gleich</p>
        <?php endif ; ?>
      </div>

      <!-- if-else Anweisung verschachtelt -->
      <div class="box">
        <h4> if-else Anweisung verschachtelt </h4>
        
      </div>

    </div>
  </section>

</body>
</html>
