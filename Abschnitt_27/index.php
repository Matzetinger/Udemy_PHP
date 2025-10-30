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
    echo "Ich bin ein echo und habe keinen Rückgabewert <br>";
// print
    $test = print "Ich bin ein print und kann einen Rückgabewert liefern";
    echo $test;

// heredoc
$text = <<<TEXT
<br>
Hallo ich kann hier alles schreiben "test"
**test** und bin in einer Zeile bis
<br>
oh ein br-tag dazwischen gesetzt wurde von <u>$name</u>

TEXT;

echo $text

  ?>
  


  


</body>
</html>