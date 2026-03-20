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
        <li><a href="#4">04. Benannte Parameter</a></li>
        <li><a href="#5">05. Gültigkeit von Variablen - global & local</a></li>
        <li><a href="#6">06. Return - Rückgabewerte von functionen</a></li>
        <li><a href="#7">07. Rekursive Funktionen - die sich selbst ausführt bis das Ziel erreicht ist</a></li>
        <li><a href="#8">08. Generatoren</a></li>
        <li><a href="#9">09. Statische Variablen in funktionen</a></li>
        <li><a href="#10">10. function_exists</a></li>
        <li><a href="#11">11. Aufgabe und Lösung zu functionen</a></li>
        <li><a href="../../Abschnitt_38/Lösung/index.php">Zur Lösung Abschnitt_38</a></li>
        
        
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
        <li><a href="../../Abschnitt_39/Video-Section/index.php">39_Typedeklaration in Funktionen</a></li>
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
      <p><span class="orange">Splat</span>-operator (Entpacken) =<span class="orange"> ... </span></p>
      <p>aber auch <span class="pink">Spread</span>-operator (Einpacken) =<span class="pink"> ... </span></p>

      <h2>03_1. func_num_args und func_get_args</h2>
      <h4>Hinweis</h4>
      <p><span class="lila">func_num_args</span> gibt die Anzahl der übergebenen Argumente zurück.</p> 
      <p><span class="türkis">func_get_args</span> erstellt ein Array aus den Argumenten die an die function übergeben wurden. <br> 
          Funktioniert wie ein <span class="pink">Spread</span>-operator ist aber ein älteres PHP-Feature, das vor allem vor PHP 5.6 benutzt wurde.</p> 
        
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
            <td class="noFlex" colspan="3"><span class="orange">Splat</span>-Operator</td>
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

      <!-- function mit func_num_args() -->
      <div class="box">
      <h4>function mit <span class="pink">Spread</span>-operator und <span class="lila">func_num_args()</span>  </h4>

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
              echo 'Anzahl der Argumente :' .  <span class="lila">func_num_args()</span> . "< br >";

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
            <td class="noFlex" colspan="3"><p><span class="orange">Splat</span>-Operator</p></td>
          </tr>
          <tr>
          <td class="noFlex"><p>echo plus(<span class="orange">...</span>$paket);</p></td>
            <td class="noFlex"><p> = </p></td>
          <td class="noFlex">
              <span><?php 
              echo plus(...$paket);
                
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function func_get_args veraltet -->
      <div class="box">
      <h4>function mit <span class="türkis">func_get_args</span> veraltet</h4>

        <?php 
        function summieren(){
          $args = func_get_args();

          return array_sum($args);
        }
        
        $args = [12,18,4];

        ?>
 
        <div class="code-container">
          <pre>
            function summieren(){
              $args = <span class="türkis">func_get_args()</span>;

              return array_sum($args);
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo summieren(50, 50);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo summieren(50, 50);
                
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 04. Benannte Parameter -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>04. Benannte Parameter</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Hinweis</h4>
      <p>Mit den <span class="orange">Benannten</span> Parameter muss ich mich nicht an die Reihenfolge der Parameter halten</p>
        
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function createUser($username, $email, $role = "Mitglied"){
          echo "Username: $username <br>";
          echo "Email: $email <br>";
          echo "Role: $role <br>";
        }
        
        ?>
 
        <div class="code-container">
          <pre>
            function createUser($<span class="orange">username</span>, $<span class="orange">email</span>, $<span class="orange">role</span> = "subscriber"){
              echo "Username: $username < br >";
              echo "Email: $email < br >";
              echo "Role: $role < br >";
            }
            
           
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>createUser("JOSEF","info@menschenort.de","Weltrichter");</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                createUser("JOSEF","info@menschenort.de","Weltrichter");
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>createUser(<span class="orange">email:</span> "muehlenderm@hotmail.de", <span class="orange">role:</span>"Vizepräsident", <span class="orange">username:</span>"Matthias");</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                createUser(email: "muehlender@hotmail.de", role:"Vizepräsident", username:"Matthias");
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 05. Gültigkeit von Variablen - global & local -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>05. Gültigkeit von Variablen - global & local</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <?php 
      $gericht = "Kartoffelauflauf"
      ?>
      <p><span class="orange">$gericht</span> = "Kartoffelauflauf"<span class="orange"> <--  Globale Variable</span> sind außerhalb von Funktionen</p>
      <p>Im gesamten code verwendbar außer in Funktionen </p>
      <h4>Hinweis</h4>
      <p><span class="türkis">Locale Variable</span> sind die innerhalb von funktionen</p>
      <p>würde die Variable <span class="türkis">$gericht</span> nicht in der funktion sein dann würde es ein Warning geben</p>
      <p>Mit <span class="orange">global</span> kann ich auf Variablen außerhalb der funktion zugreifen um sie zu verwenden</p>
      <p>Um Global auf eine Lokale Variable zuzugreifen muss <span class="rot">return</span> gesetzt sein</p>
      
        
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function getGericht(){
          $gericht = "Nudelauflauf";
          $gericht1 = "Hackbraten";
          echo $gericht . "<br>";
          return $gericht1;
        }
        
        ?>
 
        <div class="code-container">
          <pre>
            function getGericht(){
              <span class="türkis">$gericht</span> = "Nudelauflauf";
              <span class="türkis">$gericht1</span> = "Hackbraten";
               echo <span class="türkis">$gericht</span> . "< br >";
              <span class="rot">return</span> <span class="türkis">$gericht1</span>;
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>getGericht()</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                getGericht()
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>echo <span class="orange">$gericht</span>;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $gericht;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo getGericht()</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo getGericht();
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function mit global -->
      <div class="box">
      <h4>function mit global</h4>

        <?php 
        function echoGlobalGericht(){
          global $gericht;
          echo $gericht;
        }
        
        ?>
 
        <div class="code-container">
          <pre>
            function echoGlobalGericht(){
              <span class="orange">global</span> $gericht;
              echo <span class="orange">$gericht</span>;
            }
            
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echoGlobalGericht()</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echoGlobalGericht()
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 06. Return - Rückgabewerte von functionen -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>06. Return - Rückgabewerte von functionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <p><span class="orange">$sayName</span> = <span class="orange">getName()</span>; → führt die Funktion aus und speichert das Ergebnis</p>
      <p><span class="lila">$sayNameNoRun</span> = <span class="orange">"getName"</span>; → speichert nur den Namen, nichts wird ausgeführt</p>
      <p>$function = <span class="dunkelgrün">function</span>() {} → speichert die Funktion selbst (Closure)</p>
      
      <h4>Hinweis</h4>
      <p><span class="rot">return</span> = Code-Block beenden und Werte zurückgeben </p>
      <p>Jeden Datentyp wie Array, String, Integer, Funktionen, Klasse usw. kann zurückgegeben werden</p>
      <p>Closure = Hat Zugriff auf direkten äußeren Scope der <span class="grün">function</span> in diesem Fall <span class="orange">getName()</span> und ist eine anonyme <span class="dunkelgrün">function</span></p>
      <p>Eine anonyme <span class="dunkelgrün">function</span> gespeichert in einer Variable kann mit <span class="dunkelgrün">function</span>() <span class="türkis">use</span>() auf den global-scope zugreifen </p>
      
    </div>

    <div class="inhalt-container">

      <!-- function bezug auf Return -->
      <div class="box">
      <h4>function bezug auf Return</h4>

        <?php 
        function getName(){
          $name1 = "Matze";

          return function() use($name1){
            echo "Hallo " . $name1 ;
          };
          
        }
        

        $sayNameNoRun = "getName";

        $sayName = getName();
      
        
        ?>
 
        <div class="code-container">
          <pre>
            <span class="grün">function</span> <span class="orange">getName()</span>{

              <span class="rot">return</span> <span class="dunkelgrün">function</span>() use($name1){
                echo "Hallo " . $name1 ;
              };
          
            }

            <span class="lila">$sayNameNoRun</span> = <span class="orange">"getName"</span>;

            <span class="orange">$sayName</span> = <span class="orange">getName()</span>;
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>

        <tr>
            <td class="noFlex"><p>echo <span class="lila">$sayNameNoRun</span>;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $sayNameNoRun;
              ?></span>
            </td>
        </tr>
        
          <tr>
            <td class="noFlex"><p><span class="orange">$sayName()</span>;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                $sayName();
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>var_dump (<span class="orange">getName()</span>);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump (getName());
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>var_dump(<span class="orange">$sayName</span>);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump($sayName);
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function bezug auf Return mit Array -->
      <div class="box">
      <h4>function bezug auf Return mit Array</h4>

        <?php 
        function returnArray(){

          return ["alter" => 19, "name" => "Jessica" ];
          
        }

        $returnArr = returnArray();
        
        ?>
 
        <div class="code-container">
          <pre>
            function returnArray(){

            <span class="rot">return</span> ["alter" => 19, "name" => "Jessica" ];
          
            }

            $returnArr = returnArray();
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo $returnArr["name"];</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $returnArr["name"];
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 07. Rekursive Funktionen - die sich selbst ausführt bis das Ziel erreicht ist -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>07. Rekursive Funktionen - die sich selbst ausführt bis das Ziel erreicht ist</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function rekursive($start, $end){
          echo "Start = " . $start . " End = " . $end . "<br>";

          if ($start >= $end){
            return;
          }
           
          echo $start . "+1 ";
          rekursive($start + 1, $end);
            
        }
        
        
        ?>
 
        <div class="code-container">
          <pre>
            function rekursive($start, $end){
              echo "Start = " . $start . " End = " . $end . "< br >";

              if ($start >= $end){
              return;
              }
          
              echo $start . "+1 ";
              <span class="orange">rekursive($start + 1, $end)</span>;
            
            }
            
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>rekursive(1, 10);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                rekursive(1, 10);
              ?></span>
            </td>
          </tr>
        </table>
      </div>
        </table>
      </div>
    </div>
  </section>

  <!-- 08. Generatoren -->
  <section id="8" class="section">
    <div class="text-box">
      <h2>08. Generatoren</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <h4>Hinweis</h4>
      <p>Alternative zu return: Während return einen Wert zurückgibt und die Funktion beendet, gibt <span class="rot">yield</span> einen Wert zurück, pausiert die Funktion aber und merkt sich ihren Zustand.</p>
      <p>Iteratoren ohne Speicheraufwand: Eine Funktion, die <span class="rot">yield</span> enthält, gibt ein Generator-Objekt zurück, das durchlaufen (iteriert) werden kann.</p>
      <p>Lazy Loading: Die Werte werden nicht alle auf einmal im Voraus berechnet und im Speicher abgelegt, sondern erst dann generiert, wenn sie in einer foreach-Schleife benötigt werden</p>
      
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php
        function gen(){
          yield 1;
          yield 2;
          yield 3;
        }
        
        ?>
        
        <div class="code-container">
          <pre>
            function gen(){
              <span class="rot">yield</span> 1;
              <span class="rot">yield</span> 2;
              <span class="rot">yield</span> 3;
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex">
              <pre>
                foreach (gen() as $wert) {
                  echo $wert;
                  $wert = $wert;
                }
              </pre>
              
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               foreach (gen() as $wert) {
                  echo $wert;
                  $wert = $wert;
                }
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>echo $wert;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               echo $wert;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p></p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(gen()) 
              ?></span>
            </td>
          </tr>
        </table>
      </div>

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php
        function numGen($starten, $ende){
          for($i = $starten; $i <= $ende; $i++){
            yield $i;
          }
        }
        
        ?>
        
        <div class="code-container">
          <pre>
            function numGen($starten, $ende){
              for($i = $starten; $i <= $ende; $i++){
              <span class="rot">yield</span> $i;
              }
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex">
              <pre>
                foreach (numGen(1, 10) as $value) {
                  echo $value . " ";
                }
              </pre>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              foreach (numGen(1, 10) as $value) {
                echo $value . " ";
              }
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

    <!-- 09. Statische Variablen in funktionen -->
  <section id="9" class="section">
    <div class="text-box">
      <h2>09. Statische Variablen in funktionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <h4>Hinweis</h4>
      <p><span class="orange">static</span> Speichert über funktions Aufrufe hinweg ihren aktuellen Wert </p>
      
        
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function counts(){
          static $cache = 0;
          $cache++;
          echo $cache . "<br>";
        }
        
        ?>
 
        <div class="code-container">
          <pre>
            function counts(){
              <span class="orange">static</span> $cache = 0;
              $cache++;
              echo $cache . "< br >";
            }
            
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>counts();<br>counts();<br>echo "Wort"; <br> counts();<br>counts();</p></td>
            <td class="noFlex"><p> = <br> = <br> = <br> = <br> = </p></td>
            <td class="noFlex">
              <span><?php 
                counts();
                counts();
                echo "Wort <br>";
                counts();
                counts();
              ?></span>
            </td>
          </tr>
          
        </table>
      </div>

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function stati(){
          static $cache1 = 0;
          $cache1++;

            if($cache1 >= 3){
            
              echo "limit erreicht <br>";
              return;
            }

          echo $cache1 . "<br>";
        }
        
        ?>
 
        <div class="code-container">
          <pre>
            function stati(){
              <span class="orange">static</span> $cache1 = 0;
              $cache1++;
          
            if ($cache1 >= 3){
            
              echo "limit erreicht < br >";
              return;
            }

            echo $cache1 . "< br >";
            }
            
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>stati();<br>echo "Wort";<br>stati(); <br> stati();<br>stati();</p></td>
            <td class="noFlex"><p> = <br> = <br> = <br> = <br> = </p></td>
            <td class="noFlex">
              <span><?php 
                stati();
                echo "Wort <br>";
                stati();
                stati();
                stati();
              ?></span>
            </td>
          </tr>
          
        </table>
      </div>
    </div>
  </section>

  <!-- 10. function_exists -->
  <section id="10" class="section">
    <div class="text-box">
      <h2>10. function_exists</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>

    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function existiert(){
          echo "ich bin eine Funktion die Existiert";
        }
        ?>
 
        <div class="code-container">
          <pre>
            function existiert(){
              echo "ich bin eine Funktion die Existiert";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>var_dump(function_exists("existiert"));</p></td>
            <td class="noFlex"><p> =</p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(function_exists("existiert"));
              ?></span>
            </td>
            
          </tr>
          <tr>
            <td class="noFlex">
              <pre>
                echo function_exists("existiert") ? existiert() : " existiert nicht";
              </pre>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex"><span>
              <?php
                echo function_exists("existiert") ? existiert() : " existiert nicht";
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex">
              <pre>
                echo function_exists("hallo") ? hallo() : " existiert nicht";
              </pre>
            </td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex"><span>
              <?php
                echo function_exists("hallo") ? hallo() : " existiert nicht";
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 11. Aufgabe und Lösung zu functionen -->
  <section id="11" class="section">
    <div class="text-box">
      <h2>11. Aufgabe und Lösung zu functionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
       function division($zahl, $zahl2){
          return $zahl2 == 0 ? "Teilen durch 0 nicht möglich" : $zahl / $zahl2;
       }

        $result = division(10, 0);
        ?>
 
        <div class="code-container">
          <pre>
            function division($zahl, $zahl2){
              return $zahl2 == 0 ? "Teilen durch 0 nicht möglich" : $zahl / $zahl2;
            }
          
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo $result;</p></td>
            <td class="noFlex"><p> =</p></td>
            <td class="noFlex">
              <span><?php
               echo $result;
              ?></span>
            </td>
          </tr>

        </table>
      </div>
    </div>
  </section>
  

</body>
</html>