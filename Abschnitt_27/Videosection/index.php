<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sprachkonstrukte</title>
</head>
<body>
  <h1>Sprachkonstrukte</h1>
<h3><?php echo "Ich bin ein echo eingepackt in einem h3-Tag";?></h3>

  <?php
    $name = "Matthias";
// echo
    echo "Ich bin ein <b>echo</b> und habe <u>keinen</u> Rückgabewert <br>";
// print
    $test = print "Ich bin ein <b>print</b> und kann einen Rückgabewert liefern";
    echo $test;

// heredoc
    $text = <<<TEXT
      <br>
      Hallo ich kann mit <b>heredoc</b> hier alles schreiben "test"
      **test** und bin in einer Zeile bis
      <br>
      oh ein br-tag dazwischen gesetzt wurde von <u>$name</u>
    TEXT;

    echo $text;

// nowdoc
    $text2 = <<<'TEXT2'
      <br>
      <b>nowdoc</b> das selbe nur das hier <u>keine</u> Variablen verwendet werden können
      da es hier drin alles als <u>string</u> gewertet wird
    TEXT2;

    echo $text2;
    
// printf

    printf("<br>Hallo mein Name ist %s und ich habe %d %s: Ein <u>string</u> Formatiert über Platzhalter ausgegeben", $name, 6, "Äpfel");

/* 
%s: Zeichensätze
%d: oder %i: Ganzzahl
%f: Fließkommazahl (Standartmäßig 6 Dezimalstellen)
%x: Hexadezimalzahl (kleinbuchstaben)
%X: Hexadezimalzahl (GROßBUCHSTABEN)
%b: Binärzahl
%%: Ein Literal-Prozentzeichen
*/
echo "<br>";
// print_r

    $array = ["Jonas", "Jessica", "eva", 35, true, false, [1,2,3,4,5]];

    print_r($array);
    echo"<br>bei print_r werden array's oder objekte ausgegeben und ist eher ein Debugging-tool <br>";

// var_dump

    $integer = 42;
    $float = 3.15;
    $string = "Hallo String";
    $array2 = [1,2,3,"stringtext",4,5];
    $object = (object) $array;

    var_dump($array2);
    // Debbuging-tool nr.1
    echo "<br>";
    echo "<br>";
// var_export

    var_export($array2);
    echo "<br>";
    print_r ($array2);
    echo "<br>";
    var_export($string);
    echo "<br>";
    var_export($integer);
    echo "<br>";

    $value = var_export($integer, true);
    echo "<br>";
    echo $value;
    echo $value;
    echo $value;
    echo $value;
    echo $value;
    echo $value;
    echo $value;
    
  ?>
  
</body>
</html>