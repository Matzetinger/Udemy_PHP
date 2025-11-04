<?php
$br = "<br>";
$variableString = "Ich bin eine String Variable";
$variableInteger = 34;
$float = 99.99;
$array = ["Matthias", 34, "Protokolle", 99.99, 12, 18, 4];
$typeKonv = 34;
$variableÄndern = 'Geändert zu $variableGeändert';
//Ändere die $variableÄndern zu $VariableGeändert
$variableGeändert = $variableÄndern;
$löschen = "Löschen mit unsset";
$null = 0;
$leer = "";
//Variable Array zu object konvertieren
$object = ((object)$array);

//Zeig mir den Type der Variable
echo gettype ($array) . $br;

//Zeig mir was in der Variable ist
var_dump ($array);
echo $br;

//Zeigt mir ob diese Variable existiert
var_dump (isset ($variableInteger));
echo $br;

//Zeigt mir ob diese Variable mit dem namen "staat" existiert mit if und else
if (isset($staat)){echo "Ich variable staat existiere";}
else {echo "ich variable staat existiere nicht";};

echo (isset($staat)) . $br;


//Zeigt mir ob die Variable leer ist oder nicht
echo "Zeig mir ob die Variable leer ist oder nicht" . $br;
var_dump (empty($variableInteger));
echo $br;
var_dump (empty($leer));
echo $br;

//Zeig mir ob die Variable leer ist oder nicht wenn ja is null?
echo "Zeig mir ob die Variable leer ist oder nicht wenn ja is null ?" . $br;
var_dump (empty($null));
var_dump (is_null($null));
var_dump (is_null($leer));

echo $br;

// Gib die Geänderte Variable aus
echo $variableGeändert . $br;

echo "Prüfe die Variable Löschen, gib sie dann aus, danach lösche sie und überprüfe es erneut" . $br;

var_dump (isset($löschen));
echo $br;
echo $löschen . $br;
unset ($löschen);
var_dump (isset($löschen));
echo $br;

//Konvertiere $typeKonv von aktuell integer zu einen string / und das Array zu einem Object
echo "--------- Konvertieren ---------";
echo $br;

var_dump((string)$typeKonv);
echo $br;

var_dump($typeKonv); 
echo $br;

settype($typeKonv, "String");
var_dump($typeKonv);
echo $br;

var_dump($array);
echo $br;
#array zu object davon eine Index anzeigen
var_dump($object->{0});
var_dump($object);

?>