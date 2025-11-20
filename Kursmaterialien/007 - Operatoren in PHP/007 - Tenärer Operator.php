<?php
$a = 7;
$b = 6;
$c = 10;


//(Bedingung) ? "Wenn Wahr": "Wenn Falsch";

echo $a ? "Ist truthy": "Ist falsy";



echo ($a <= $b) ? "A ist kleiner oder gleich": (($c === 10) ? (($a === 5 ? "Ja": "Nein")): "Nein");


?>
