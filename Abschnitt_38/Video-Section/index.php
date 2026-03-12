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
    <p><a href="../../Abschnitt_37/Video-Section/index.php">37</a></p>
    <h1>Abschnitt 38</h1>
    <p><a href="../../Abschnitt_39/Video-Section/index.php">39</a></p>
  </nav>
  <section id="0" class="section_index">
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Funktion deklarieren und verwenden</a></li>
        <li><a href="#2">02. Standartwerte für Parameter</a></li>
        <li><a href="#3">03. Splat / Spread-Operator - Variable Anzahl von Parametern</a></li>
        <li><a href="#3">03_1. func_num_args und func_get_args</a></li>
        <li><a href="#4">04. </a></li>
        <li><a href="#5">05.</a></li>
        <li><a href="#6">06.</a></li>
        <li><a href="#7">07.</a></li>
        <li><a href="#8">08.</a></li>
        <li><a href="#9">09.</a></li>
        <li><a href="#10">10.</a></li>
        <li><a href="#11">11.</a></li>
        <li><a href="#12">12.</a></li>
        <li><a href="#13">13.</a></li>
      </ul>
    </div>
    <div class="box_abschnitte">
      <h2>Abschnitte</h2>
      <ul>
        <li><a href="../../Abschnitt_30/Video-Section/index.php">30_Operatoren in PHP</a></li>
        <li><a href="../../Abschnitt_31/Video-Section/index.php">31_Arbeiten mit String</a></li>
        <li><a href="../../Abschnitt_32/Video-Section/index.php">32_Fallunterscheidung</a></li>
        <li><a href="../../Abschnitt_33/Video-Section/index.php">33_Schleifen in PHP</a></li>
        <li><a href="../../Abschnitt_34/Video-Section/index.php">34_Arrays in PHP</a></li>
        <li><a href="../../Abschnitt_35/Video-Section/index.php">35_Superglobale Arrays</a></li>
        <li><a href="../../Abschnitt_36/Video-Section/index.php">36_Mathematische Funktionen</a></li>
        <li><a href="../../Abschnitt_37/Video-Section/index.php">37_Zufallszahlen generieren</a></li>
        <li>38_Funktionen in PHP</li>
      </ul>
    </div>
  </section>

<!-- 01. Funktion deklarieren und verwenden -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. Funktion deklarieren und verwenden</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $name = "Matthias";
        ?>
        <p>$name = "<span class="grün">Matthias</span>"</p>

        <h4>Hinweis Paramenter und Argumente</h4>
        <p>Function "Name der funktion"(<span class="orange">Parameterfeld</span>)</p>
        <p>Argument ist ein tatsächlicher Wert</p>
        <p>"name der funcion"(<span class="grün">Argument = Tatsächliche Werte</span>)</p>


    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 

        function greets($name){
          echo "Hallo $name";
        } 

        ?>

        <div class="code-container">
          <pre>
            function greets(<span class="orange">$name</span>){
              echo "Hallo $name";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>greets(<span class="grün">$name</span>)</p></td>
            <td><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                greets($name);
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>greets("<span class="grün">JOSEF</span>")</p></td>
            <td><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                greets("JOSEF");
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 

        function addieren($num1, $num2){
          $res = $num1 + $num2;

          return $res;
        } 
        
        $value = addieren(12, 18);
        $value2 = addieren(2, 2,);
        $val1u2 = addieren($value, $value2);
        
        ?>

        <div class="code-container">
          <pre>
            function addieren(<span class="orange">$num1, $num2</span>){
              $res = <span class="orange">$num1</span> + <span class="orange">$num2</span>;

              return $res;
            } 
        
            $value = addieren(<span class="grün">12, 18</span>);
            $value2 = addieren(<span class="grün">2, 2</span>);
            $val1u2 = addieren(<span class="grün">$value, $value2</span>);
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo $value;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $value;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $value2;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $value2;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $val1u2;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $val1u2;
              ?></span>
            </td>
          </tr>
            
          
        </table>
      </div>
    </div>
  </section>

  <!-- 02. Standartwerte für Parameter -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. Standartwerte für Parameter</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Hinweis</h4>
        <p>Standartwerte vergeben(<span class="pink">= Wert</span>)</p>
        <p>Falls Argumente nicht gesetzt wurden, wird das Standard Argument(Wert) verwendet</p>
        <p>Eine function kann auch ein Wert sein</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 

        function calc($num3 = 0, $num4 = 0, $num5 = 0){
          $res = $num3 + $num4 + $num5;

          return $res;
        }

        $summe = calc();
        $summe1 = calc(12, 18, 4);
        
        ?>

        <div class="code-container">
          <pre>
            function calc($num3 <span class="pink">= 0</span>, $num4 <span class="pink">= 0</span>, $num5 <span class="pink">= 0</span>){
              $res = $num3 + $num4 + $num5;

              return $res;
            }

            $summe = calc()
            $summe1 = calc(12, 18, 4);
           
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo $summe;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $summe;
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>$summe1;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $summe1;
              ?></span>
            </td>
          </tr>
        </table>

      
      </div>
    </div>
  </section>

  <!-- 03. Splat / Spread-Operator - Variable Anzahl von Parametern // func_num-args und func_get_args -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>03. Splat / Spread-Operator - Variable Anzahl von Parametern</h2>
      
      <p><a href="#0">Inhaltsverzeichnis</a></p>

      <h4>Variablen</h4>
      <p>$paket = [1,2,3,4];<br>
         $zahlen = [12, 18, 4];
      </p>

      <h4>Hinweis</h4>
      <p>Splat-operator (Entpacken) =<span class="orange"> ... </span></p>
      <p>aber auch Spread-operator (Einpacken) =<span class="pink"> ... </span></p>

      <h2>03_1. func_num_args und func_get_args</h2>
      <h4>Hinweis</h4>
      <p><span class="lila">func_num_args</span></p>
      <p><span class="türkis">func_get_args</span></p>
        
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function calculator($a, $b, $c){
          return $a + $b + $c;
        }

        $zahlen = [12, 18, 4];
        

        ?>

        <div class="code-container">
          <pre>
            function calculator($a, $b, $c){
              return $a + $b + $c;
            }

            $zahlen = [12, 18, 4];
            
           
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo calculator($zahlen[0], $zahlen[1], $zahlen[2]);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo calculator($zahlen[0], $zahlen[1], $zahlen[2]);
                
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex" colspan="3">Splat-Operator</td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo calculator(<span class="orange">...</span>$zahlen);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo calculator(...$zahlen);
                
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function plus(...$numbers){
          echo 'Anzahl der Argumente: <span class="pink">' .  func_num_args() . "</span> <br>";

          return "Ergebnis: " . array_sum($numbers);
        }

        $paket = [1,2,3,4];
        

        ?>

        <div class="code-container">
          <pre>

            function plus(<span class="pink">...</span>$numbers){
              echo 'Anzahl der Argumente :' .  <span class="lila">func_num_args()</span> . "<br>";

              return "Ergebnis: " . array_sum($numbers);
            }

            $paket = [1,2,3,4];
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo plus(1,2,3,4,5);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo plus(1,2,3,4,5);
                
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex" colspan="3"><p>Splat-Operator</p></td>
          </tr>
          <td class="noFlex"><p>echo plus(<span class="orange">...</span>$paket);</p></td>
            <td class="noFlex"><p> = </p></td>
          <td class="noFlex">
              <span><?php 
              echo plus(...$paket);
                
              ?></span>
            </td>
          
        </table>
      </div>
    </div>
  </section>

</body>
</html>