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

  <section class="section1">
    <h2>1. Mathematische (Arithmetische) Operatoren</h2>
    <div class="inhalt-container">

      <!-- Addition -->
      <div class="box">
        <h3>Addition</h3>
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
        <h3>Subtraktion</h3>
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
        <h3>Multiplikation</h3>
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
        <h3>Division</h3>
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
        <h3>Modulo (rest)</h3>
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
    <h2>2. Post und Prä Ink- und Decrement</h2>
    <div class="inhalt-container">

      <div class="box">
        <h3>Post-Inkrement (danach)</h3>
        <?php 
          $d = 100;
          $e = $d++;
        ?>
        <p>$d = 100 <br>$e = $d++ <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <div class="box">
        <h3>Post-Decrement (danach)</h3>
        <?php 
          $d = 100;
          $e = $d--;
        ?>
        <p>$d = 100 <br>$e = $d-- <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <div class="box">
        <h3>Prä-Inkrement (davor)</h3>
        <?php 
          $d = 100;
          $e = ++$d;
        ?>
        <p>$d = 100 <br>$e = ++$d <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

      <div class="box">
        <h3>Prä-Decrement (davor)</h3>
        <?php 
          $d = 100;
          $e = --$d;
        ?>
        <p>$d = 100 <br>$e = --$d <br>e = <span><?= $e ?></span> <br>d = <span><?= $d ?></span></p>
      </div>

    </div>
  </section>

  <section class="section3">
   <h2>3. Expotential-Operator</h2>
 <div class="inhalt-container">

      <div class="box">
        <h3>Potenzrechnung</h3>
        <?php 
          $basis = 2;
          $exponent = 3;

          $result = $basis ** $exponent;
        ?>
        <p>$basis = 2 <br> $exponent = 3 <br> $result = $basis ** $exponent = <span><?= $result ?></span></p>
      </div>

      <div class="box">
        <h3>Quadrat ausrechnen</h3>
        <?php 
          $zahl = 4;
          $quadrat = $zahl ** 2;
        ?>
        <p>$zahl = 4 <br> $quadrat = $zahl ** 2 = <span><?= $quadrat ?></span></p>
      </div>

      <div class="box">
        <h3>Kubik ausrechnen</h3>
        <?php 
          $zahl = 3;
          $kubik = $zahl ** 3;
        ?>
        <p>$zahl = 3 <br> $kubik = $zahl ** 3 = <span><?= $kubik ?></span></p>
      </div>

      <div class="box">
        <h3>Wurzel ausrechnen</h3>
        <?php 
          $zahl = 16;
          $wurzel = $zahl ** (1/2);
        ?>
        <p>$zahl = 16 <br> $wurzel = $zahl ** (1/2) = <span><?= $wurzel ?></span></p>
      </div>

    </div>
  </section>

</body>
</html>
