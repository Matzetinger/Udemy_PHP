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
    <h6><a href="../../Abschnitt_28">28</a></h6>
    <h1>Abschnitt 30</h1>
    <h6><a href="../../Abschnitt_31/Video-Section/index.php">31</a></h6>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Mathematische + - * / % </a></li>
        <li><a href="#2">02. Decrement ++ / --</a></li>
        <li><a href="#3">03. Expotential **</a></li>
        <li><a href="#4">04. Verkettung .</a></li>
        <li><a href="#5">05. Vergleich == != === !== < > <= >=</a></li>
        <li><a href="#6">06. Ternärer</a></li>
        <li><a href="#7">07. Nullsafe ? & Null-Coalescing ??</a></li>
        <li><a href="#8">08. Spaceship <=> </a></li>
        <li><a href="#9">09. Gültigkeitsbereich ::</a></li>
        <li><a href="#10">10. Shell</a></li>
        <li><a href="#11">11. Logische && AND || OR XOR !</a></li>
        <li><a href="#12">12. Kurzschlussauswertung</a></li>
        <li><a href="#13">13. Zuweisung =</a></li>
        <li><a href="#14">14. goto</a></li>
      </ul>
      </div>
  </section>

  <!-- Mathematische (Arithmetische) Operatoren -->
  <section id="1" class="section1">
    <div class="text-box">
      <h2>1. Mathematische (Arithmetische) Operatoren + - * / %</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
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
  <section id="2" class="section2">
    <div class="text-box">
      <h2>2. Post und Prä Ink- und Decrement ++ / --</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div> 
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
  <section id="3" class="section3">
    <div class="text-box">
      <h2>3. Expotential-Operator **</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
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
  <section id="4" class="section4">
    <div class="text-box">
      <h2>4. Verkettungsoperator .</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
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
  <section id="5" class="section5">
    <div class="text-box">
      <h2>5. Vergleichsoperatoren == != === !== < > <= >=</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
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

  <!-- Ternärer Operator -->
  <section id="6" class="section6">
    <div class="text-box">
      <h2>6. Ternärer Operator</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Bedingung -->
      <div class="box">
        <h4>(Bedingung) ? "Wenn Wahr": "Wenn falsch";</h4>
        <?php 
          $a = true;
          $b = 100;
        ?>

        <p>$a = true <br> $b = 100 <br>  $a ? "ist truthy": "ist falsy" = <span><?= $a ? "ist truthy": "ist falsy" ?></span> <br> Falsy-Werte: false, 0, "", null, []</p>
      </div>

      <div class="box">
        <h4>Bedingung if / else</h4>
        <?php 
          $a = 50;
          $b = 100;
        ?>

        <p>$a = 50 <br> $b = 100 <br> ($a <= $b) ? "A Ist kleiner oder Gleich": "A Ist Größer" = <span><?= ($a <= $b) ? "A ist kleiner oder Gleich": "A ist Größer" ?></span></p>
      </div>

      <div class="box">
        <h4>Bedingung verschachtelt</h4>
        <?php 
          $a = 1000;
          $b = 100;
          $c = 50;
        ?>

        <p>$a = 1000 <br> $b = 100 <br> $c = 50 <br> ($a <= $b) ? "A Ist kleiner oder Gleich": ($c === 10) ? "Ja ist 50": "nein ist größer oder kleiner" = <br> <span><?= ($a <= $b) ? "A Ist kleiner oder Gleich": (($c === 10) ? "Ja C ist 50": "nein ist größer oder kleiner") ?></span></p>
      </div>
    </div>
  </section>

  <section id="7" class="section7">
    <div class="text-box">
      <h2>7. Nullsafe ? & Null-Coalescing Operator ?? "Ausgabetext wenn null" </h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Eigenschaft zugreifen -->
      <div class="box">
        <h4>Auf eine Eigenschaft zugreifen wenn vorhanden -></h4>
        <?php 

          class Benutzer1{
            public $profil1;

            public function __construct($profil1 = null){
              $this->profil1 = $profil1;
            }
          }

          class Profil1{
            public $name1;

            public function __construct($name1 = null){
              $this->name1 = $name1;
            }
          }

          $benutzer1 = new Benutzer1(new Profil1("IOSIF"));
        ?>
        <p>$benutzer1->profil1->name1 = <span><?= $benutzer1->profil1->name1 ?></span></p>
      </div>

      <!-- Nullsafe -->
      <div class="box">
        <h4>Nullsafe ?</h4>
        <?php 

          class Benutzer{
            public $profil;

            public function __construct($profil = null){
              $this->profil = $profil;
            }
          }

          class Profil{
            public $name;

            public function __construct($name = null){
              $this->name = $name;
            }
          }

          $benutzer = new Benutzer(new Profil(null));
        ?>
        <p>$benutzer?->profil?->name = <span><?= $benutzer?->profil?->name?></span></p>
        
      </div>

      <!-- Null-Coalescing -->
      <div class="box">
        <h4>Null-Coalescing ?? "Ausgabetext wenn null"</h4>
        <p>$benutzer?->profil?->name ?? "Standardwert" = <span><?= $benutzer?->profil?->name ?? "Standardwert" ?></span></p>
        <p>Wenn Wert "False" dann keine Ausgabe</p>
      </div>
      
      <!-- Null-Coalescing -->
      <div class="box">
        <h4>Null-Coalescing ??</h4>

        <?php
          $var = null;
          $value = $var;
        ?>
        <p>$var = null <br> $value = $var <br> $value = Keine ausgabe weil ist null <span><?= $value ?></span></p>
        <?php
          $var = null;
          $var2 = null;
          $var3 = "String";
          $value = $var?? "Ausgabetext wenn null";
        ?>
        <p>$var = null <br> $value = $var?? "Ausgabetext wenn null" <br> $value = <span><?= $value ?></span></p>
      </div>

      <div class="box">
        <h4>Null-Coalescing ?? Koaleszens-Operator</h4>
        <?php
          $var = 23;
          $var2 = null;
          $var3 = "String";
          $value = $var?? $var2?? $var3?? "Ausgabetext wenn null";
        ?>
        <p>$var = 23 <br> $var2 = null <br> $var3 = "String" <br> $value = $var?? $var2?? $var3?? "Ausgabetext wenn null" = <span><?= $value ?></span></p>
      </div>
    </div>
  </section>

  <section id="8" class="section8">
    <div class="text-box">
      <h2>8. Spaceship Operator <=></h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Spaceship Operator -->
      <div class="box">
        <h4>Spaceship -1</h4>
        <?php 
          $a = 50;
          $b = 100;
        ?>
        <p>$a = 50  $b = 100 <br> $a <=> $b = <span><?= $a <=> $b ?></span> <br> A ist kleiner als B deswegen -1</p>
      </div>

      <div class="box">
        <h4>Spaceship 1</h4>
        <?php 
          $a = 100;
          $b = 50;
        ?>
        <p>$a = 100  $b = 50 <br> $a <=> $b = <span><?= $a <=> $b ?></span> <br> A ist größer als B deswegen 1</p>
      </div>

      <div class="box">
        <h4>Spaceship 0</h4>
        <?php 
          $a = 50;
          $b = 50;
        ?>
        <p>$a = 50  $b = 50 <br> $a <=> $b = <span><?= $a <=> $b ?></span> <br> A und B sind gleich deswegen 0</p>
      </div>

      <div class="box">
        <h4>Spaceship Sortieren</h4>
        <?php 
          $zahlen = [12, 18, 4, 34];

          usort($zahlen, function($a, $b){
            return $a <=> $b;
          } );
        ?>
        <p>$zahlen = [12, 18, 4, 34] <br> usort($zahlen, function($a, $b){return $a <=> $b;}); <br> = <span><?php print_r($zahlen) ?></span></p>
      </div>

    </div>
  </section>

  <section id="9" class="section9">
    <div class="text-box">
      <h2>9. Gültigkeitsbereichoperator ::</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Gültigkeitsbereichoperator -->
      <div class="box">
        <h4>Scope Resolution Operator</h4>
        <?php 
          class User{
            public static $name = "IOSIF";
            public static function greets(){
              return "Hallöchen";
            }
          };

          $phpcode = <<<'PHPCODE'
            class User{
            public static $name = "IOSIF";
            public static function greets(){
              return "Hallöchen";
            }
          };

          PHPCODE;
          ?>

        <p><?= $phpcode ?></p>
        <p>User::$name = <span><?= User::$name ?></span> <br> User::greets() =<span><?= User::greets() ?></span> <br></p>
      </div>

      <!-- Gültigkeitsbereichoperator -->
      <div class="box">
        <h4>Scope Resolution Operator</h4>
        <?php 
          class User1{
            const AGE = 35;
            public static $name1 = "IOSIF";
            public static function greets1(){
              return "Hallöchen";
            }
          };

          $phpcode1 = <<<'PHPCODE1'
            class User1{
            const AGE = 35;
            public static $name1 = "IOSIF";
            public static function greets1(){
              return "Hallöchen";
            }
          };
          PHPCODE1;
          ?>

        <p><?= $phpcode1 ?></p>
        <p>User1::$name1 = <span><?= User1::$name1 ?></span> <br> User1::greets1() = <span><?= User1::greets1() ?></span> <br> User1::AGE =  <span><?= User1::AGE ?></span> </p>
      </div>

      <!-- Gültigkeitsbereichoperator Parent Class -->
      <div class="box">
        <h4>Scope Resolution Operator : Zugriff auf Methoden übergeordeter Klassen</h4>
        <?php 
          class User2{
            const AGE = 35;
            public static $name2 = "MATTHIAS";
            public static function greets2(){
              return "Hallöle";
            }
          };

          class Hobby extends User2{
            public static function kochen(){
              return parent::greets2();
            }
          }

          $phpcode1 = <<<'PHPCODE1'
            class User2{
            const AGE = 35;
            public static $name2 = "IOSIF";
            public static function greets2(){
              return "Hallöle";
            }
          };
          PHPCODE1;

          $phpcode2 = <<<'PHPCODE2'
            class Hobby extends User2{
            public static function kochen(){
              return parent::greets2();
            }
          }


          PHPCODE2
          ?>

        <p><?= $phpcode1 ?></p>
        <p><?= $phpcode2 ?></p>
        <p>User2::$name2 = <span><?= User2::$name2 ?></span> <br> User2::greets2() = <span><?= User2::greets2() ?></span> <br> User2::AGE =  <span><?= User2::AGE ?></span> <br> Hobby::kochen() = <span><?= Hobby::kochen() ?></span> </p>
      </div>
    </div>
  </section>

  <section id="10" class="section10">
    <div class="text-box">
      <h2>10. Shell-Operator Befehle</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- shell_exec -->
      <div class="box">
        <h4>shell_exec('dir')</h4>
        <?php 
          $result = shell_exec('dir');
          ?>

        <p>$result = shell_exec('dir') mit Var_dump = <span><?php var_dump($result); ?></span></p>
      </div>

      <!-- exec('dir') -->
      <div class="box">
        <h4>exec('dir')</h4>
        <?php 
          $result2 = exec('dir');
          ?>

        <p>$result2 = exec('dir') mit Var_dump = <span><?php var_dump($result2); ?></span></p>
      </div>

      <!-- system("dir") -->
      <div class="box">
        <h4>system("dir")</h4>
        <p>$result3 = system("dir") = </p>
          <?php
            $result3 = system("dir");
            ?>
        <p>system("dir") gibt aus ohne echo etc.</p>
        <p>$result3 = system("dir") mit Var_dump = <span><?php var_dump($result3); ?></span></p>
      </div>

      <!-- passthru("dir") -->
      <div class="box">
        <h4>passthru("dir")</h4>
        <p>$result4 = passthru("echo test") = 
          <span><?php
            passthru("echo Test");
            ?></span></p>
            <p>$result4 = passthru("dir") = </p>
            <?php
            $result4 = passthru("dir");
            ?>
        <p>passthru("dir") gibt aus ohne echo oder var_dump etc.</p>
        <p>$result4 = passthru("dir") mit Var_dump = <span><?php var_dump($result4); ?></span></p>
        <p>var_dump zeigt NULL, weil passthru NIE etwas zurückgibt.</p>
      </div>

      <!-- passthru("dir") -->
      <div class="box">
        <h4>File erstellen mit shell</h4>
        <p>$filename = "text.txt"</p>
        <p>$inhalt = "Hallo im Hacking"</p>
          <?php
            $filename = "text.txt";
            $inhalt = "Hallo im Hacking";
            //$result5 = shell_exec("echo $inhalt > $filename 2>&1");
            ?>
        <p>$result5 = shell_exec("echo $inhalt > $filename 2>&1") = <span><a href="./text.txt" target="_blank" rel="noopener noreferrer">Datei erstellt</a></span></p>
        
      </div>
    </div>
  </section>

  <section id="11" class="section11">
    <div class="text-box">
      <h2>11. Logische Operatoren && oder AND / || oder OR / XOR / ! </h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Logischer Operator && -->
      <div class="box">
        <h4>Logischer Operator "&&" (Logisches und)</h4>
        <?php 
          $t = true;
          $t1 = true;
          $result = $t && $t1;
          ?>

        <p>$t = true <br> $t1 = true <br> $result = $t && $t1 </p>
        <p>var_dump($result) = <span><?php var_dump($result) ?></span></p>
        <p>echo $result ? "true" : "false" = <span><?= $result ? "true" : "false" ?></span></p>
        <p>"TRUE" weil beide "TRUE" sind und &&/AND prüft immer auf "TRUE"</p>
      </div>

      <!-- Logischer Operator AND -->
      <div class="box">
        <h4>Logischer Operator "AND" (Logisches und )</h4>
        <?php 
          $t2 = true;
          $f2 = false;
          $result2 = ($t2 AND $f2);
          ?>
        <p>"AND" hat niedrigere Priorität: ohne Klammer gibt "TRUE" aus weil der erste wert ist "TRUE"</p>
        <p>$t2 = true <br> $f2 = false <br> $result2 = ($t2 AND $f2) </p>
        <p>var_dump($result2) = <span><?php var_dump($result2) ?></span></p>
        <p>echo $result2 ? "true" : "false" = <span><?= $result2 ? "true" : "false" ?></span></p>
        <p>"FALSE" weil nicht beide "TRUE" sind &&/AND prüft immer auf "TRUE"</p>
      </div>

      <!-- Logischer Operator || -->
      <div class="box">
        <h4>Logischer Operator "||" (Entweder Oder)</h4>
        <?php 
          $t3 = true;
          $f3 = false;
          $result3 = $t || $f;
          ?>
        <p>$t3 = true <br> $f3 = false <br> $result3 = $t3 || $f3 </p>
        <p>var_dump($result3) = <span><?php var_dump($result3) ?></span></p>
        <p>echo $result3 ? "true" : "false" = <span><?= $result3 ? "true" : "false" ?></span></p>
        <p>"TRUE" weil mindestens ein Wert "True" ist das prüft ||/OR</p>
      </div>

      <!-- Logischer Operator OR -->
      <div class="box">
        <h4>Logischer Operator "OR" (Entweder Oder)</h4>
        <?php 
          $f4 = false;
          $t4 = true;
          $result4 = ($f4 OR $t4);
          ?>
        <p>"OR" hat niedrigere Priorität: ohne Klammer gibt "FALSE" aus weil der erste Wert ist "FALSE"</p>
        <p>$f4 = false <br> $t4 = true <br> $result4 = ($f4 OR $t4) </p>
        <p>var_dump($result4) = <span><?php var_dump($result4) ?></span></p>
        <p>echo $result4 ? "true" : "false" = <span><?= $result4 ? "true" : "false" ?></span></p>
        <p>"TRUE" weil mindestens ein Wert "True" ist, das prüft ||/OR</p>
        <p>"FALSE" wenn beide "FALSE" wären: var_dump($f4 OR $f3) = <span><?php var_dump($f4 OR $f3)?> </p>
      </div>

      <!-- NOT Operator ! (negieren/umkehren)-->
      <div class="box">
        <h4>NOT Operator "!" (negieren/umkehren) </h4>
        <?php 
          $t5 = true;
          $f5 = false;
          ?>
        <p>$t5 = true <br> $f5 = false</p>
        <p>var_dump(!$t5) = <span><?php var_dump(!$t5) ?></span></p>
        <p>"FALSE" weil $t5 ist "TRUE" , "!" prüft also ob etwas "FALSE" ist</p>
        <p>var_dump(!$f5) = <span><?php var_dump(!$f5) ?></span></p>
        <p>"TRUE" weil $f5 ist "FALSE" , "!" prüft also ob etwas "FALSE" ist</p>
      </div>

       <!-- Exklusives oder XOR -->
      <div class="box">
        <h4> Exklusives oder "XOR" </h4>
        <?php 
          $t6 = true;
          $f6 = false;
          $result5 = ($f6 XOR $t6)
          ?>
        <p>$t6 = true <br> $f6 = false <br> $result5 = ($f6 XOR $t6) </p>
        <p>var_dump($result5) = <span><?php var_dump($result5) ?></span></p>
        <p>"TRUE" weil einer ist TRUE und der andere nicht </p>
        <p>Sind beide "TRUE" kommt ein "FALSE"</p>
        <p>var_dump($t6 XOR $t5) = <span><?php var_dump($t6 XOR $t5) ?></span></p>
        <p> XOR überprüft ob eine Wert "TRUE" ist und der andere NICHT</p>
      </div>
    </div>
  </section>

  <section id="12" class="section12">
    <div class="text-box">
      <h2>12. Kurzschlussauswertung</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div>
    <div class="inhalt-container">

      <!-- Short-circuit-evaluation -->
      <div class="box">
        <h4>Short-circuit-evaluation</h4>
        <?php 
          function istPositiv($zahl){
            echo "Überprüfe Zahl: $zahl <br>";
            return $zahl > 0;
          }

          $a = 5;
          $b = -3;
          ?>

        <p>function istPositiv($zahl){echo "Überprüfe Zahl: $zahl";return $zahl > 0;} <br> $a = 5 <br> $b = -3</p>
        <p>if(istPositiv($a) && istPositiv($b)){echo "Beide Zahlen sind positiv";}else{echo "Mindestens eine Zahl ist negativ";} = <br>
          <span><?php if(istPositiv($a) && istPositiv($b)){
                        echo "Beide Zahlen sind positiv";
                      }else{
                        echo "Mindestens eine Zahl ist negativ";
                      }
                ?></span></p>
      </div>

      <!-- Short-circuit-evaluation -->
      <div class="box">
        <h4>Short-circuit-evaluation (sichtbar)</h4>
        <?php 
          function isPositiv($zahl){
            echo "Überprüfe Zahl: $zahl <br>";
            return $zahl > 0;
          }

          $aa = -5;
          $bb = 3;
          ?>

        <p>function isPositiv($zahl){echo "Überprüfe Zahl: $zahl";return $zahl > 0;} <br> $aa = -5 <br> $bb = 3</p>
        <p>Prüft immer von links nach rechts</p>
        <p>if(istPositiv($aa) && istPositiv($bb)){echo "Beide Zahlen sind positiv";}else{echo "Mindestens eine Zahl ist negativ";} = <br>
          <span><?php if(isPositiv($aa) && isPositiv($bb)){
                        echo "Beide Zahlen sind positiv";
                      }else{
                        echo "Mindestens eine Zahl ist negativ";
                      }
                ?></span></p>
                <p> Stoppt die Überprüfung sobald negative Zahl auftaucht wegen Angabe $zahl > 0</p>
      </div>
      <div class="box">
        <h4>Short-circuit-evaluation (sichtbar) Short</h4>
        <?php 
          function isPositiv1($zahl){
            echo "Überprüfe Zahl: $zahl <br>";
            return $zahl > 0;
          }

          $aaa = -15;
          $bbb = 3;
          ?>
          <p>(isPositiv1($aaa) && isPositiv1($bbb)) ? "Beide sind Positiv" : "Min eine ist Negatv" = <br></p>
          <span><?= (isPositiv1($aaa) && isPositiv1($bbb)) ? "Beide sind Positiv" : "Min eine ist Negatv" ?></span></p>
      </div>
    </div>
  </section>

  <section id="13" class="section13"> 
    <div class="text-box"> 
      <h2>13. Zuweisungsoperator =</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div> 
    <div class="inhalt-container">

      <!-- Zuweisungsoperator -->
      <div class="box">
        <h4>Zuweisungsoperator = </h4>
        <?php 
          $variable = 'Ich wurde der $variable Zugewiesen';
        ?>
        <p>$variable = 'Ich wurde der $variable Zugewiesen'<br>echo &variable = <span><?= $variable ?></span></p>
      </div>
    </div>
  </section>

  <section id="14" class="section14">  
    <div class="text-box">
      <h2>14. goto Operator (Sprünge)</h2>
      <h6><a href="#0">Inhaltsverzeichnis</a></h6>
    </div> 
    <div class="inhalt-container">
    

      <!-- Ohne goto Operator -->
      <div class="box">
        <h4>Normaler Fluss ohne goto</h4>
        <?php 
          $condition = true;   
        ?>
        <p>$condition = true; <br>if($condition){echo "wurde nicht übersprungen";} = 
        <span><?php if($condition){
                    echo "wurde nicht übersprungen";
                    } 
              ?>
        </span> <br> echo "Dies hier wird nie Übersprungen (Ziel)" = <span><?= "Dies hier wird nie Übersprungen (Ziel)" ?></span>
        </p>
      </div>

      <div class="box">
        <h4>Mit goto</h4>
        <?php 
          $condition1 = true; 
        ?>
        <p>$condition1 = true; <br> goto jump; <br><span class = "grau"> if($condition1){echo "das wird übersprungen";}</span> <br> jump:</p>
        <p><span><?php  goto jump; 
                    echo "das wird übersprungen";
                    jump:
                 ?></span></p>

        <p>echo "hier läuft der code weiter (Ziel)" = </p>
        <p><span><?php echo "hier läuft der code weiter (Ziel)"; ?></span></p>
      </div>
    </div>
  </section>
        
      


</body>
</html>
