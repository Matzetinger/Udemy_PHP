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
      <div>
        <h3>Addition</h3>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a + $b;
        ?>
        <p>$a = <?= $a ?> <br>$b = <?= $b ?> <br>$summe = $a + $b = <?= $summe ?></p>

        <?php $c += 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c += 5 = <?= $c ?></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <?= $c ?></p>

        <?php $c++; ?>
        <h5>Increment</h5>
        <p>Hier wird das vorherige Ergebnis +1 erhöht <br>$c++ = <?= $c ?></p>

        <?php 
          $d = 100;
          $e = ++$d;
        ?>
        <h5>Prä-Inkrement (davor)</h5>
        <p>$d = 100 <br>$e = ++$d <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <!-- Subtraktion -->
      <div>
        <h3>Subtraktion</h3>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a - $b;
        ?>
        <p>$a = <?= $a ?> <br>$b = <?= $b ?> <br>$summe = $a - $b = <?= $summe ?></p>

        <?php $c -= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c -= 5 = <?= $c ?></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <?= $c ?></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <?= $c ?></p>

        <?php 
          $d = 100;
          $e = --$d;
        ?>
        <h5>Prä-Decrement (davor)</h5>
        <p>$d = 100 <br>$e = --$d <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <!-- Multiplikation -->
      <div>
        <h3>Multiplikation</h3>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a * $b;
        ?>
        <p>$a = <?= $a ?> <br>$b = <?= $b ?> <br>$summe = $a * $b = <?= $summe ?></p>

        <?php $c *= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c *= 5 = <?= $c ?></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <?= $c ?></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <?= $c ?></p>

        <?php 
          $d = 100;
          $e = $d--;
        ?>
        <h5>Post-Decrement (danach)</h5>
        <p>$d = 100 <br>e = $d-- <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <!-- Division -->
      <div>
        <h3>Division</h3>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a / $b;
        ?>
        <p>$a = <?= $a ?> <br>$b = <?= $b ?> <br>$summe = $a / $b = <?= $summe ?></p>

        <?php $c /= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c /= 5 = <?= $c ?></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <?= $c ?></p>

        <?php $c--; ?>
        <h5>Decrement</h5>
        <p>Hier wird das vorherige Ergebnis -1 genommen <br>$c-- = <?= $c ?></p>

        <?php 
          $d = 100;
          $e = $d--;
        ?>
        <h5>Post-Decrement (danach)</h5>
        <p>$d = 100 <br>e = $d-- <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <!-- Modulo -->
      <div>
        <h3>Modulo (rest)</h3>
        <?php 
          $a = 5;
          $b = 3;
          $c = 10;
          $summe = $a % $b;
        ?>
        <p>$a = <?= $a ?> <br>$b = <?= $b ?> <br> $summe = $a % $b = <?= $summe ?></p>

        <?php $c %= 5; ?>
        <h5>Short</h5>
        <p>$c = 10 <br>$c %= 5 = <?= $c ?></p>

        <?php $c += 5; ?>
        <p>Hier wird das vorherige Ergebnis + genommen <br>$c += 5 = <?= $c ?></p>

        <?php $c++; ?>
        <h5>Inkrement</h5>
        <p>Hier wird das vorherige Ergebnis +1 erhöht <br>$c++ = <?= $c ?></p>
      </div>

    </div>
  </section>

  <!-- Post und Prä Inkrement/Decrement -->
  <section class="section2">   
    <h2>2. Post und Prä Ink- Decrement</h2>
    <div class="inhalt-container">

      <div>
        <h3>Post Inkrement (danach)</h3>
        <?php 
          $d = 100;
          $e = $d++;
        ?>
        <p>$d = 100 <br>e = $d++ <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <div>
        <h3>Post Decrement (danach)</h3>
        <?php 
          $d = 100;
          $e = $d--;
        ?>
        <p>$d = 100 <br>e = $d-- <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <div>
        <h3>Post Inkrement (davor)</h3>
        <?php 
          $d = 100;
          $e = ++$d;
        ?>
        <p>$d = 100 <br>e = ++$d <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

      <div>
        <h3>Post Decrement (davor)</h3>
        <?php 
          $d = 100;
          $e = --$d;
        ?>
        <p>$d = 100 <br>e = --$d <br>e = <?= $e ?> <br>d = <?= $d ?></p>
      </div>

    </div>
  </section>

</body>
</html>
