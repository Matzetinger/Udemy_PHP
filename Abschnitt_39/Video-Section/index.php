
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
    <p><a href="../../Abschnitt_38/Video-Section/index.php">37</a></p>
    <h1>Abschnitt 39</h1>
    <p><a href="../../Abschnitt_40/Video-Section/index.php">40</a></p>
  </nav>
  <section id="0" class="section_index">
    <div>
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. Typedeklaration in Funktionen</a></li>
        <li><a href="#2">02. Sensitive Parameter</a></li>
        <li><a href="#3">03. Typdeklaration mit null (?)</a></li>
        <li><a href="#4">04. Union Types in PHP</a></li>
        <li><a href="#5">05. Der Typ never</a></li>
        <li><a href="#6">06. Enumerations(Enums) als typen von Funktionen</a></li>
        <li><a href="#7">07. Backed Enums -Enums mit skalaren Werten</a></li>
        
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
        <li><a href="../../Abschnitt_38/Video-Section/index.php">38_Funktionen in PHP</a></li>
        <li>39_Typedeklaration in Funktionen</li>
        <li><a href="../../Abschnitt_40/Video-Section/index.php">40_Das Arbeiten mit Formularen</a></li>
      </ul>
    </div>
  </section>

<!-- 01. Typedeklaration in Funktionen -->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. Typedeklaration in Funktionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
         $text = text(38, "Matthias");
        ?>
        <p>$text = text(38, "Matthias");</p>

        <h4>welchen Datentyp die function <br> zurückgeben erlaubt = doppelpunkt <span class="grün">:</span> und Typ</h4>
        <h4>Typdeklarationen</h4>
        <p><span class="rot">string</span> – Zeichenketten/Text (z. B. "Matthias")</p>
        <p><span class="rot">int</span> – Ganzzahlen (z. B. 38 oder -5)</p>
        <p><span class="rot">float</span> – Gleitkommazahlen (z. B. 3.8 oder 10.5)</p>
        <p><span class="rot">bool</span> – Wahrheitswerte (true oder false)</p>
        <p><span class="rot">array</span> – Listen von Daten</p>
        <p><span class="rot">object</span> – Instanzen von Klassen</p>
        <p><span class="rot">callable</span> – Funktionen oder Methoden (Callbacks)</p>
        <p><span class="rot">iterable</span> – Alles, was mit foreach durchlaufbar ist (Arrays/Generatoren)</p>
        <p><span class="rot">mixed</span> – Akzeptiert jeden Datentyp (PHP 8.0+)</p>
        <p><span class="rot">void</span> – Gibt absolut nichts zurück (nur als Rückgabetyp)</p>
        <p><span class="rot">never</span> – Bricht das Skript hart ab (nur als Rückgabetyp, PHP 8.1+)</p>
        <p><span class="rot">null</span> – Repräsentiert eine leere Variable</p>
        <p><span class="rot">false</span> – Kann als spezifischer Rückgabetyp genutzt werden (PHP 8.0+)</p>
       </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function text(int $alter, string $name) :string {
          return "Hallo, ich bin $alter und mein Name ist $name";
        }

            
        ?>

        <div class="code-container">
          <pre>
            function text(<span class="rot">int</span> $alter, <span class="rot">string</span> $name) <span class="grün">:</span><span class="rot">string</span>{
              return "Hallo, ich bin $alter und mein Name ist $name";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>echo $text</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $text
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 02. Sensitive Parameter -->
  <section id="2" class="section">
    <div class="text-box">
      <h2>02. Sensitive Parameter</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <p>$errorMessage = "";<br> $errorTrace = "";</p>
      <h4>Hinweis</h4>
      <p><span class="orange">Sensitiv</span> Parameter erscheinen nicht in der Fehlermeldung</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function login(string $username, #[SensitiveParameter] string $password) {
          // Simuliere einen Fehler
          throw new Exception("Fehler beim Login");
        }

        try{
          login("benutzer", "geheim");
        } catch (Exception $e){
          $errorMessage = $e->getMessage() . "\n";
          $errorTrace = $e->getTraceAsString();
        }

            
        ?>

        <div class="code-container">
          <pre>
            function login(string $username, <span class="orange">#[SensitiveParameter]</span> string $password) {
              // Simuliere einen Fehler
              throw new Exception("Fehler beim Login");
            }

            try{
              login("benutzer", "geheim");
            } catch (Exception $e){
              $errorMessage = $e->getMessage() . "\n";
              $errorTrace = $e->getTraceAsString();
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>echo $errorMessage;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $errorMessage;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $errorTrace;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                echo $errorTrace;
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 03. Typdeklaration mit null (?) -->
  <section id="3" class="section">
    <div class="text-box">
      <h2>03. Typdeklaration mit null (?)</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Hinweis</h4>
      <p><span class="orange">?</span> vor der Typdeklaration sagt das neben dem Datentyp den ich erwarte auch NULL sein kann</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function findPerson(?string $name): ?array{
          $personen = [
            "Josef" => ["name" => "Josef", "alter" => 54],
            "Matthias" => ["name" => "Matthias", "alter" => 38]
          ];

          if($name === null || !isset($personen[$name])){
            return null;
          }

          return $personen[$name];
        }

            
        ?>

        <div class="code-container">
          <pre>
            function findPerson(<span class="orange">?</span>string $name): <span class="orange">?</span>array{
              $personen = [
                "Josef" => ["name" => "Josef", "alter" => 54],
                "Matthias" => ["name" => "Matthias", "alter" => 38]
              ];

              if($name === null || !isset($personen[$name])){
                return null;
              }

              return $personen[$name];
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>var_dump(findPerson(null));</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(findPerson(null));
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>print_r(findPerson("Josef"));</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                print_r(findPerson("Josef"));
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 04. Union Types in PHP -->
  <section id="4" class="section">
    <div class="text-box">
      <h2>04. Union Types in PHP</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <p></p>
      <h4>Hinweis</h4>
      <p>Wie im Beispiel function(addiere): <br> Es kann entweder dieser Datentyp(int)  ( <span class="orange">|</span> = oder) dieser Datentyp(float) sein</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function addiere(int|float $a, int|float $b): int|float{
          return $a + $b;
        }
        
        ?>

        <div class="code-container">
          <pre>
            function addiere(int<span class="orange">|</span>float $a, int<span class="orange">|</span>float $b): int<span class="orange">|</span>float{
              return $a + $b;
            }
            
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo addiere(5, 3);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(addiere(5, 3)) ;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo addiere(2.5, 3.5);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(addiere(2.5, 3.5)) ;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p> echo addiere(5, 3.5);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                var_dump(addiere(5, 3.5));
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 05. Der Typ never -->
  <section id="5" class="section">
    <div class="text-box">
      <h2>05. Der Typ never</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <?php
        $error = "";
      ?>
      <p>$error = "";</p>
      <h4>Hinweis</h4>
      <p>Bei dem Typ <span class="rot">never</span> darf nichts ausgegeben werden weder mit return noch mit echo oder sonst was</p>
      <p>Hier darf man nur einen <span class="türkis">Fehler werfen</span> <code class="error-throw">(╯°□°)╯ ︵ <span class="bomb-shake">💣 ERROR</span></code></p>
      <p>Man kann auch <span class="pink">exit();</span> oder <span class="pink">die;</span> verwenden und davor ein echo setzen</p>
    </div>

    <div class="inhalt-container">

      <!-- function -->
      <div class="box">
      <h4>function</h4>

        <?php 
        function addieren(int|float $a, int|float $b): never {
          throw new Exception("Simulierte Fehlerausgabe (╯°□°)╯ ︵ 💣", 1);
          }
        
          try{
            addieren();
          }catch(\Throwable $th){
            $error = "Es wurde ein Fehler geworfen (╯°□°)╯ ︵ 💣";
          }
        ?>

        <div class="code-container">
          <pre>
            function addiere(int|float $a, int|float $b): <span class="rot">never</span>{
              <span class="türkis">throw new Exception("Simulierte Fehlerausgabe (╯°□°)╯ ︵ 💣", 1);</span>
          
            }

            try{
              addiere();
            }catch(\Throwable $th){
              $error = "Es wurde ein Fehler geworfen (╯°□°)╯ ︵ 💣";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo addieren(2,3);</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span>Fatal error: Uncaught Exception: Simulierte Fehlerausgabe (╯°□°)╯ ︵ 💣 in C:\xampp\htdocs\Udemy_PHP\Abschnitt_39\Video-Section\index.php:363 Stack trace: #0 C:\xampp\htdocs\Udemy_PHP\Abschnitt_39\Video-Section\index.php(396): addieren(2, 3) #1 {main} thrown in C:\xampp\htdocs\Udemy_PHP\Abschnitt_39\Video-Section\index.php on line 363</span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo $error;</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               echo $error;
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 06. Enumerations(Enums) als typen von Funktionen -->
  <section id="6" class="section">
    <div class="text-box">
      <h2>06. Enumerations(Enums) als typen von Funktionen</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <?php
        
      ?>
      <p></p>
      <h4>Hinweis</h4>
      <p>Mit <span class="türkis">enum</span> kann ich Werte festlegen die ein Parameter haben darf</p>
      <p>Bekommt man einen anderen Wert der nicht erwartet wird, wird ein fehler geschmissen den ich mit einem "try"/"catch" - Block behandeln kann</p>
      <p><span class="lila">::</span> ist der Bereichsoperator</p>
    </div>

    <div class="inhalt-container">

      <!-- enum -->
      <div class="box">
      <h4>enum</h4>

        <?php
        enum Colors {
          case Rot;
          case Grün;
          case Blau;
        }
        ?>

        <div class="code-container">
          <pre>
            <span class="türkis">enum</span> <span class="orange">Colors</span> {
              case Rot;
              case Grün;
              case Blau;
            }
          </pre>
        </div>

      <!-- function -->
      <h4>function</h4>

        <?php 
        function beschreibeFarbe(Colors $farbe): string {
          return match($farbe){
            Colors::Rot => 'Die Farbe ist Rot',
            Colors::Grün => 'Die Farbe ist Grün',
            Colors::Blau => 'Die Farbe ist Blau',
          };
        }
        ?>

        <div class="code-container">
          <pre>
            function beschreibeFarbe(<span class="orange">Colors</span> $farbe): string {
              return match($farbe){
                <span class="grau">"Rot" => 'Die Farbe ist Rot',
                "Grün" => 'Die Farbe ist Grün',
                "Blau" => 'Die Farbe ist Blau',</span>

                <span class="orange">Colors</span><span class="lila">::</span>Rot => 'Die Farbe ist Rot',
                <span class="orange">Colors</span><span class="lila">::</span>Grün => 'Die Farbe ist Grün',
                <span class="orange">Colors</span><span class="lila">::</span>Blau => 'Die Farbe ist Blau',
              };
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p><span class="grau">echo beschreibeFarbe("Rot");</span> < schreibweise ohne <span class="türkis">enum</span> <span class="orange">Colors</span></p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span>
               Die Farbe ist Rot
              </span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo beschreibeFarbe(<span class="orange">Colors</span><span class="lila">::</span>Rot)</p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
               echo beschreibeFarbe(Colors::Rot);
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- 07. Backed Enums -Enums mit skalaren Werten -->
  <section id="7" class="section">
    <div class="text-box">
      <h2>07. Backed Enums -Enums mit skalaren Werten</h2>
      <p><a href="#0">Inhaltsverzeichnis</a></p>
      <h4>Variablen</h4>
      <?php
        
      ?>
      <p></p>
      <h4>Hinweis</h4>
      <p></p>
      
    </div>

    <div class="inhalt-container">

      <!-- enum -->
      <div class="box">
      <h4>enum</h4>

        <?php
        enum  Status: int{
          case  Aktiv = 1;
          case  Inaktiv = 0;
          case  Banned = -1;
        }
        ?>

        <div class="code-container">
          <pre>
            enum  <span class="orange">Status</span>: int{
              case  <span class="grün">Aktiv</span> = <span class="türkis">1</span>;
              case  <span class="grün">Inaktiv</span> = <span class="türkis">0</span>;
              case  <span class="grün">Banned</span> = <span class="türkis">-1</span>;
            }
            
          </pre>
        </div>

      <!-- MySQL-Query -->
      <h4>MySQL-Query</h4>

        <div class="code-container">
          <pre>
            "UPDATE users SET status = " . <span class="orange">Status</span><span class="lila">::</span><span class="grün">Aktiv</span>-><span class="türkis">value</span> . " WHERE id = 12354";
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
          <tr>
            <td class="noFlex"><p>echo <span class="orange">Status</span><span class="lila">::</span><span class="grün">Aktiv</span>-><span class="türkis">value</span></p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo Status::Aktiv-> value;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo <span class="orange">Status</span><span class="lila">::</span><span class="grün">Inaktiv</span>-><span class="türkis">value</span></p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo Status::Inaktiv-> value;
              ?></span>
            </td>
          </tr>
          <tr>
            <td class="noFlex"><p>echo <span class="orange">Status</span><span class="lila">::</span><span class="grün">Banned</span>-><span class="türkis">value</span></p></td>
            <td class="noFlex"><p> = </p></td>
            <td class="noFlex">
              <span><?php 
              echo Status::Banned-> value;
              ?></span>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</body>
</html>