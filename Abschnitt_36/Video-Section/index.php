<?php 
  setcookie("Beruf", "Friseur", time() + 3600);
  session_start();
?>

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
    <p><a href="../../Abschnitt_35/Video-Section/index.php">35</a></p>
    <h1>Abschnitt 36</h1>
    <p><a href="../../Abschnitt_37/Video-Section/index.php">37</a></p>
  </nav>
  <section id="0" class="section">
    <div class="box">
    <h2>Inhaltsverzeichnis</h2>
      <ul>
        <li><a href="#1">01. abs() - Berechnet den absoluten Wert einer Zahl</a></li>
        <li><a href="#2">02. </a></li>
        <li><a href="#3">03. </a></li>
        <li><a href="#4">04. </a></li>
        <li><a href="#5">05. </a></li>
        <li><a href="#6">06. </a></li>
        <li><a href="#7">07. </a></li>
      </ul>
    </div>
  </section>

 
  
  <!-- 01. $_GET-->
  <section id="1" class="section">
    <div class="text-box">
      <h2>01. abs() - Berechnet den absoluten Wert einer Zahl</h2>
        <p><a href="#0">Inhaltsverzeichnis</a></p>
      
      <!-- Variablen -->
      <h4>Variablen</h4>
        <?php 
          $zahl = NULL;
          

          if(isset($_GET["zahl"]) && $_GET["zahl"] !== ""){
            $clean_input = str_replace(",", ".", $_GET["zahl"]);

            if (is_numeric($clean_input)){
            $zahl = abs((float)$clean_input);
            } else {
              $zahl = "Gib was Anständiges ein, und versuch hier nicht zu Hacken";
            }
          }
        ?>
        <p>$zahl = NULL;</p>
    </div>

    <div class="inhalt-container">

      <!-- abs() - Berechnet den absoluten Wert einer Zahl -->
      <div class="box">
        

        <h4>abs()</h4>
        <form action="index.php" method="GET">
          <table> 
            <tr>
              <td>
                <label for="zahl">Zahl</label>
                <input
                  type="text"
                  name="zahl"
                  id="zahl"
                  placeholder="Zahl"
                  required pattern =[0-9,.\-]{1,10}
                >
              </td>

              <td>
                <input type="submit" value="Berechnen">
                <a href="./">Zurücksetzen</a>
              </td>

              <td>
                <p> Ergebnis = 
                  <span>
                    <?php if ($zahl !== NULL){
                      echo $zahl;;}
                    ?>
                  </span>
                </p>
              </td>

              <td>
                <span><?php 
                      ?>
                </span>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section>

</body>
</html>