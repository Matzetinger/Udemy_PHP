<?php
// Aktuelles Datum und Zeit anzeigen
echo "Heute ist: " . date("Y-m-d") . "<br>";
$dateTime = new DateTime();
echo "Heute ist auch: " . $dateTime->format("d.m.Y") . "<br>";

// Datumsumrechnung mit Timestamps
$now = time();
$newYear = strtotime("2024-12-31");
$daysUntilNewYear = ($newYear - $now) / 86400; // Sekunden pro Tag
echo "Tage bis Silvester: " . floor($daysUntilNewYear) . "<br>";

// String zu Datum umwandeln
$dateString = "2024-12-24";
$dateTimeFromString = DateTime::createFromFormat("Y-m-d", $dateString);
if ($dateTimeFromString && checkdate($dateTimeFromString->format('m'), $dateTimeFromString->format('d'), $dateTimeFromString->format('Y'))) {
    echo "Validiertes Datum: " . $dateTimeFromString->format("Y-m-d") . "<br>";
} else {
    echo "Ungültiges Datum!<br>";
}
?>

<pre>
    // Aktuelles Datum und Zeit anzeigen
echo "Heute ist: " . date("Y-m-d") . "<br>";
$dateTime = new DateTime();
echo "Heute ist auch: " . $dateTime->format("d.m.Y") . "<br>";

// Datumsumrechnung mit Timestamps
$now = time();
$newYear = strtotime("2024-12-31");
$daysUntilNewYear = ($newYear - $now) / 86400; // Sekunden pro Tag
echo "Tage bis Silvester: " . floor($daysUntilNewYear) . "<br>";

// String zu Datum umwandeln
$dateString = "2024-12-24";
$dateTimeFromString = DateTime::createFromFormat("Y-m-d", $dateString);
if ($dateTimeFromString && checkdate($dateTimeFromString->format('m'), $dateTimeFromString->format('d'), $dateTimeFromString->format('Y'))) {
    echo "Validiertes Datum: " . $dateTimeFromString->format("Y-m-d") . "<br>";
} else {
    echo "Ungültiges Datum!<br>";
}
?>


</pre>