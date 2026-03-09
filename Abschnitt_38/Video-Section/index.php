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
        <li><a href="#2">02.</a></li>
        <li><a href="#3">03.</a></li>
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
        <p>$name = "Matthias"</p>
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
            function greets($name){
              echo "Hallo $name";
            }
          </pre>
        </div>

        <h4>Ausgabe</h4>

        <table>
  
          <tr>
            <td class="noFlex"><p>greets($name)</p></td>
            <td><p> = </p></td>
            <td class="noFlex">
              <span><?php 
                greets($name);
              ?></span>
            </td>
          </tr>

          <tr>
            <td class="noFlex"><p>greets("JOSEF")</p></td>
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
            function addieren($num1, $num2){
              $res = $num1 + $num2;

              return $res;
            } 
        
            $value = addieren(12, 18);
            $value2 = addieren(2, 2,);
            $val1u2 = addieren($value, $value2);
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

</body>
</html>