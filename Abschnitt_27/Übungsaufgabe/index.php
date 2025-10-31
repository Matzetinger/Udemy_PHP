<?php
$name = "Matthias";
$art = "Hybriden";

// Echo 
echo "Ich bin ein echo <br>";
$text = "ich bin der text der festgelegten Variable aus Zeile 4";

// print

$text_print = print "Ich bin ein print mit rückgabe Wert";
echo $text_print;

// heredoc

$text1 = <<<TEXT
<br> Ich bin ein heredoc mit text und kann auch eine variable ausgeben: $text <br>
TEXT;

echo $text1;

// nowdoc

$text2 = <<<'TEXT2'
ich bin ein nowdoc und kann keine Variable 
ausgeben nur reinen text zeilenumbrüche im code Ignoriere 
ich bis ein br <br> gesetzt wurde <br>
TEXT2;

echo $text2;

// printf

$test = printf ("<br> Hallo mein name ist %s und sage das %.2f %% der Menschen %s sind", $name, 99.99, $art);

?>