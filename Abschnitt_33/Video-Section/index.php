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
    <p><a href="../../Abschnitt_32/Video-Section/index.php">32</a></p>
    <h1>Abschnitt 33</h1>
    <p><a href="../../Abschnitt_34/Video-Section/index.php">34</a></p>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. for-Schleife </a></li>
        <li><a href="#2">02. </a></li>
        <li><a href="#3">03. </a></li>
      </ul>
    </div>
  </section>

  <!-- 1. for-Schleife -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>1. for-Schleife</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $i = 0;
          $s = 0;
          $schleife_start = 1;
          $schleife_end = 0;
          $wert = ["Logik","Tugend","Gunst","Tapferkeit"];
        ?>
        <p>$i = 0;<br>$schleife_start = 1;<br>$schleife_end = 0;<br>$wert = ["Logik","Tugend","Gunst","Tapferkeit"]</p>
    </div>

    <div class="inhalt-container">

      <!-- for im Beispiel mit 3 Schleifen -->
      <div class="box">
        <h4>for im Beispiel mit 3 Schleifen</h4>
        
          <pre>
            for($i;$i < 3;){ 
              echo "Start $schleife_start. Schleife < br >";

               $s = $i++;

              echo "Ausführung Code $s + 1 = " . $i . "< br >";

                $schleife_start++;
                $schleife_end++;

              echo " Ende der $schleife_end. Schleife < br > < br >";
            }
          </pre>
          <p style="text-align:center">
            <span>
              <?php
                  for($i=0;$i < 3;){ 
                      echo "Start $schleife_start. Schleife <br>";
                    $s = $i++;
                      echo "Ausführung Code $s + 1 = " . $i . "<br>";
                    $schleife_start++;
                    $schleife_end++;
                      echo " Ende der $schleife_end. Schleife <br> <br>";
                     }
              ?>
            </span>
            Schleifenanzahl pro for Verschachtelung: 3,12,39,120,363,1092,3279,9840,29523,88572
          </p>       
      </div>

      <!-- for im Beispiel mit Array-->
      <div class="box">
        <h4>for im Beispiel mit Array</h4>
        
          <pre>
           for($w=0; $w < count($wert); $w++){ 

            echo $wert[$w] . "< br >";
           }
          </pre>
          <p style="text-align:center">
            <span>
              <?php
                  for($w=0; $w < count($wert); $w++){ 
                   echo $wert[$w] . "<br>";
                  };
              ?>
            </span>
          </p>       
      </div>

    </div>
  </section>

</body>
</html>