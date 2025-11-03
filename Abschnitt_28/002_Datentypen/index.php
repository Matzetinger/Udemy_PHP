<?php
$br = "<br>";
//Datentypen

//Integer
#Ganzzahlen (Zahlen ohne Komma)
echo 34;

//Floats
#Fließkomma-Zahlen (Zahlen mit Kommastellen)
echo $br . 34.12184;

#"\n" = Neue zeile für die Konsole
#"<br>" = Neue Zeile für Browser

//Strings
#Zeichenketten (Beliebiger Inhalt - Zahlen, Buchstaben etc.)
echo $br . "Hallo ich bin eine Zeichenkette bestehende aus Buchstaben und einer Zahl 34!";

//Booleans
#Wahrheitswerte (Angegeben mit True oder False)
# true bedeutet ein Wert oder ein Ereignis ist Wahr
# false bedeutet ein Wert oder ein Ereignis ist nicht Wahr


//Arrys
#Ansammlung con Datenmengen (Vorzustellen wie ein Ordner)
$x = array(
  34.12184,
  "Protokolle",
  12,
  "Werte",
  $password = false,
  $username = true,
  true,
  false
);

  echo $br;
  var_dump ($x);

?>