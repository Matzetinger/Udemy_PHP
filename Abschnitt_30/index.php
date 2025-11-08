<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <h1>Abschnitt 30</h1>

  <!-- Mathematische (Arithmetische) Operatoren -->
  <section class="section1">
    <h2>1. Mathematische (Arithmetische) Operatoren + - * / %</h2>
    <div class="inhalt-container">

      <!-- Addition -->
      <div class="box">
        <h4>Addition</h4>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a + $b;
        ?>
        <p>$a = 5 <br>$b = 3 <br>$summe = $a + $b = <span><?= $summe ?></span></p>

        <?php $c += 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c++; ?>
        <h5>Increment</h5>
        <p>Hier wird das vorherige Ergebnis +1 erhöht <br>$c++ = <span><?= $c ?></span></p>

      </div>

      <!-- Subtraktion -->
      <div class="box">
        <h4>Subtraktion</h4>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a - $b;
        ?>
        <p>$a = 5 <br>$b = 3 <br>$summe = $a - $b = <span><?= $summe ?></span></p>

        <?php $c -= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c -= 5 = <span><?= $c ?></span></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <span><?= $c ?></span></p>

      </div>

      <!-- Multiplikation -->
      <div class="box">
        <h4>Multiplikation</h4>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a * $b;
        ?>
        <p>$a = 5 <br>$b = 3 <br>$summe = $a * $b = <span><?= $summe ?></span></p>

        <?php $c *= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c *= 5 = <span><?= $c ?></span></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <span><?= $c ?></span></p>

      </div>

      <!-- Division -->
      <div class="box">
        <h4>Division</h4>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a / $b;
        ?>
        <p>$a = 5 <br>$b = 3 <br>$summe = $a / $b = <span><?= $summe ?></span></p>

        <?php $c /= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c /= 5 = <span><?= $c ?></span></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <span><?= $c ?></span></p>

      </div>

      <!-- Modulo -->
      <div class="box">
        <h4>Modulo (rest)</h4>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a % $b;
        ?>
        <p>$a = 5 <br>$b = 3 <br> $summe = $a % $b = <span><?= $summe ?></span></p>

        <?php $c %= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c %= 5 = <span><?= $c ?></span></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <span><?= $c ?></span></p>

        <?php $c++; ?>
        <h5>Inkrement</h5>
        <p>Hier wird das vorherige Ergebnis +1 erhöht <br>$c++ = <span><?= $c ?></span></p>

      </div>

    </div>
  </section>

  <!-- Post und Prä Inkrement/Decrement -->
  <section class="section2">   
    <h2>2. Post und Prä Ink- und Decrement ++ / --</h2>
    <div class="inhalt-container">

      <!-- Post-Inkrement (danach) -->
      <div class="box">
        <h4>Post-Inkrement (danach)</h4>
        <?php 
          $d = 100;
          $e = $d++;
        ?>
        <p>$d = 100 <br>$e = $d++ <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <!-- Post-Inkrement (danach) -->
      <div class="box">
        <h4>Post-Decrement (danach)</h4>
        <?php 
          $d = 100;
          $e = $d--;
        ?>
        <p>$d = 100 <br>$e = $d-- <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <!-- Prä-Inkrement (davor) -->
      <div class="box">
        <h4>Prä-Inkrement (davor)</h4>
        <?php 
          $d = 100;
          $e = ++$d;
        ?>
        <p>$d = 100 <br>$e = ++$d <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <!-- Prä-Inkrement (davor) -->
      <div class="box">
        <h4>Prä-Decrement (davor)</h4>
        <?php 
          $d = 100;
          $e = --$d;
        ?>
        <p>$d = 100 <br>$e = --$d <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

    </div>
  </section>

  <!-- Expotential-Operator -->
  <section class="section3">
    <h2>3. Expotential-Operator **</h2>
    <div class="inhalt-container">

      <!-- Potenzrechnung -->
      <div class="box">
        <h4>Potenzrechnung</h4>
        <?php 
          $basis = 2;
          $exponent = 3;

          $result = $basis ** $exponent;
        ?>
        <p>$basis = 2 <br> $exponent = 3 <br> $result = $basis ** $exponent = <span><?= $result ?></span></p>
      </div>

      <!-- Quadrat -->
      <div class="box">
        <h4>Quadrat ausrechnen</h4>
        <?php 
          $zahl = 4;
          $quadrat = $zahl ** 2;
        ?>
        <p>$zahl = 4 <br> $quadrat = $zahl ** 2 = <span><?= $quadrat ?></span></p>
      </div>

      <!-- Kubik -->
      <div class="box">
        <h4>Kubik ausrechnen</h4>
        <?php 
          $zahl = 3;
          $kubik = $zahl ** 3;
        ?>
        <p>$zahl = 3 <br> $kubik = $zahl ** 3 = <span><?= $kubik ?></span></p>
      </div>

      <!-- Wurzel -->
      <div class="box">
        <h4>Wurzel ausrechnen</h4>
        <?php 
          $zahl = 16;
          $wurzel = $zahl ** (1/2);
        ?>
        <p>$zahl = 16 <br> $wurzel = $zahl ** (1/2) = <span><?= $wurzel ?></span></p>
      </div>

    </div>
  </section>

  <!-- Verkettungsoperator -->
  <section class="section4">
    <h2>4. Verkettungsoperator .</h2>
    <div class="inhalt-container">

      <!-- Konkatenation -->
      <div class="box">
        <h4>Konkatenation</h4>
        <?php 
          $text1 = "Hallo";
          $text2 = "Variante (lang)";
        ?>
        <p>$text1 = "Hallo" <br> $text2 = "Variante (lang)" <br> $text1 . " " . $text2 = <span><?= $text1 . " " . $text2 ?></span></p>
        
      </div>

      <!-- Short -->
      <div class="box">
        <h4>Konkatenation Short</h4>
        <?php 
          $text3 = "Hallo ";
          $text3 .= "Variante (kurz)";
        ?>
        <p>$text3 = "Hallo " <br> $text3 .= "Variante (kurz)" <br> $text3 = <span><?= $text3 ?></span></p>
      </div>

      <!-- Kombiniert -->
      <div class="box">
        <h4>Konkatenation Kombiniert</h4>
        <?php 
          $text4 = "Halli ";
          $text4 .= "Hallo ";
          $text4 .= "Variante (kurz) " . "34 " . 34;
        ?>
        <p>$text4 = "Halli " <br> $text4 .= "Hallo " <br> $text4 .= "Variante (kurz) " . "34 " . 34 <br> $text4 = <span><?= $text4 ?></span></p>
      </div>

    </div>
  </section>

  <!-- Vergleichsoperatoren -->
  <section class="section5">
    <h2>5. Vergleichsoperatoren == != === !== < > <= >=</h2>
    <div class="inhalt-container">
     <h3>Gleichheit / Verwendet wird immer die Strikte ===</h3>
     <div class="box-container">
      <!-- Gleichheit soft == -->
      <div class="box">
        <h4>Einfache / Lose Gleichheit</h4>
        <?php 
          $a = 100;
          $b = 100;
          $gleich = ($a == $b);
        ?>
        <p>$a = 100 <br> $b = 100 <br> $gleich = ($a == $b) = <span><?php var_dump($gleich)?></span> <br> also JA die Werte sind gleich</p>
      </div>

      <div class="box">
        <h4>Einfache / Lose Gleichheit</h4>
        <?php 
          $a = 100;
          $b = 50;
          $gleich = ($a == $b);
        ?>
        <p>$a = 100 <br> $b = 50 <br> $gleich = ($a == $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN die Werte sind NICHT gleich</p>
      </div>

      <div class="box">
        <h4>Einfache / Lose Gleichheit</h4>
        <?php 
          $a = 100;
          $b = "100";
          $gleich = ($a == $b);
        ?>
        <p>$a = 100 <br> $b = "100" <br> $gleich = ($a == $b) = <span><?php var_dump($gleich)?></span> <br> also JA die Werte sind gleich</p>
      </div>
      <!-- Strikte Gleicheit === -->
      <div class="box">
        <h4>Strikte Gleichheit</h4>
        <?php 
          $a = 100;
          $b = "100";
          $gleich = ($a === $b);
        ?>
        <p>$a = 100 <br> $b = "100" <br> $gleich = ($a === $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN die Werte sind NICHT gleich</p>
        <p>Hier wird der Datentyp und der Wert geprüft</p>
      </div>
     </div>

     <!-- Ungleicheit -->
     <h3>Ungleichheit / Verwendet wird immer die Strikte !==</h3>
     <div class="box-container">
      
      <!-- Ungleichheit soft == -->
      <div class="box">
        <h4>Einfache / Lose Ungleichheit</h4>
        <?php 
          $a = 100;
          $b = 100;
          $gleich = ($a != $b);
        ?>
        <p>$a = 100 <br> $b = 100 <br> $gleich = ($a != $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN die Werte sind NICHT ungleich</p>
      </div>

      <div class="box">
        <h4>Einfache / Lose Ungeichheit</h4>
        <?php 
          $a = 100;
          $b = 50;
          $gleich = ($a != $b);
        ?>
        <p>$a = 100 <br> $b = 50 <br> $gleich = ($a != $b) = <span><?php var_dump($gleich)?></span> <br> also JA die Werte sind ungleich</p>
      </div>

      <div class="box">
        <h4>Einfache / Lose Ungleichheit</h4>
        <?php 
          $a = 100;
          $b = "100";
          $gleich = ($a != $b);
        ?>
        <p>$a = 100 <br> $b = "100" <br> $gleich = ($a != $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN die Werte sind NICHT ungleich</p>
      </div>

      <!-- Strikte Ungleichheit === -->
      <div class="box">
        <h4>Strike Ungleichheit</h4>
        <?php 
          $a = 100;
          $b = "100";
          $gleich = ($a !== $b);
        ?>
        <p>$a = 100 <br> $b = "100" <br> $gleich = ($a !== $b) = <span><?php var_dump($gleich)?></span> <br> also JA die Werte sind ungleich</p>
        <p>Hier wird der Datentyp und der Wert geprüft</p>
      </div>
     </div>

     <!-- Größer als > kleiner als < -->
     <h3>Größer als > kleiner als <</h3>
     <div class="box-container">
      
      <!-- Größer als-->
      <div class="box">
        <h4>Größer als</h4>
        <?php 
          $a = 50;
          $b = 100;
          $gleich = ($a > $b);
        ?>
        <p>$a = 50 <br> $b = 100 <br> $gleich = ($a > $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN $a ist NICHT größer als $b</p>
      </div>

      <!-- Kleiner als -->
       <div class="box">
        <h4>Kleiner als</h4>
        <?php 
          $a = 50;
          $b = 100;
          $gleich = ($a < $b);
        ?>
        <p>$a = 50 <br> $b = 100 <br> $gleich = ($a < $b) = <span><?php var_dump($gleich)?></span> <br> also JA $a ist kleiner als $b</p>
      </div>

      <!-- Größer als -->
      <div class="box">
        <h4>Größer als</h4>
        <?php 
          $a = 100;
          $b = 50;
          $gleich = ($a > $b);
        ?>
        <p>$a = 100 <br> $b = 50 <br> $gleich = ($a > $b) = <span><?php var_dump($gleich)?></span> <br> also JA $a ist größer als $b</p>
      </div>

      <!-- kleiner als > -->
      <div class="box">
        <h4>Kleiner als</h4>
        <?php 
          $a = 100;
          $b = 50;
          $gleich = ($a < $b);
        ?>
        <p>$a = 100 <br> $b = 50 <br> $gleich = ($a < $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN $a ist NICHT kleiner als $b</p>
      </div>

     </div>

     <!-- ist kleiner oder gleich größer oder geich -->
    <h3>Größer/Kleiner oder Gleich</h3>
     <div class="box-container">
      
      <!-- Größer als oder Gleich-->
      <div class="box">
        <h4>Größer als oder Gleich</h4>
        <?php 
          $a = 50;
          $b = 100;
          $gleich = ($a >= $b);
        ?>
        <p>$a = 50 <br> $b = 100 <br> $gleich = ($a >= $b) = <span><?php var_dump($gleich)?></span> <br> also NEIN $a ist NICHT größer als $b und auch NICHT gleich</p>
      </div>

      <!-- Kleiner als oder Gleich-->
       <div class="box">
        <h4>Kleiner als oder Gleich</h4>
        <?php 
          $a = 50;
          $b = 100;
          $gleich = ($a <= $b);
        ?>
        <p>$a = 50 <br> $b = 100 <br> $gleich = ($a <= $b) = <span><?php var_dump($gleich)?></span> <br> also JA $a ist kleiner als $b oder GLEICH</p>
      </div>

      <!-- Größer als oder Gleich -->
      <div class="box">
        <h4>Größer als oder Gleich</h4>
        <?php 
          $a = 100;
          $b = 50;
          $gleich = ($a >= $b);
        ?>
        <p>$a = 100 <br> $b = 50 <br> $gleich = ($a >= $b) = <span><?php var_dump($gleich)?></span> <br> also JA $a ist größer als $b oder GLEICH</p>
      </div>

      <!-- Kleiner als oder Gleich-->
       <div class="box">
        <h4>Kleiner als oder Gleich</h4>
        <?php 
          $a = 100;
          $b = 100;
          $gleich = ($a <= $b);
        ?>
        <p>$a = 100 <br> $b = 100 <br> $gleich = ($a <= $b) = <span><?php var_dump($gleich)?></span> <br> also JA $a ist kleiner als $b oder GLEICH</p>
      </div>

     </div>
    </div>
  </section>

</body>
</html>
