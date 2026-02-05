<pre style="font-family: system-ui">
    <h3>// 1. Erstellen und Modifizieren eines Arrays</h3>
$fruits = ["Apfel", "Banane", "Kirsche", "Dattel", "Erdbeere"];
array_push($fruits, "Mango", "Papaya");
echo "Früchte nach Hinzufügen: " . implode(", ", $fruits) . "<br>"; // Zeigt alle Früchte nach dem Hinzufügen

array_shift($fruits);
array_unshift($fruits, "Orange");
echo "Früchte nach Ersetzen des ersten Elements: " . implode(", ", $fruits) . "<br>"; // Zeigt alle Früchte nach dem Ersetzen
</pre>

<span style="color: blue"><?php
// 1. Erstellen und Modifizieren eines Arrays
$fruits = ["Apfel", "Banane", "Kirsche", "Dattel", "Erdbeere"];
array_push($fruits, "Mango", "Papaya");
echo "Früchte nach Hinzufügen: " . implode(", ", $fruits) . "<br>"; // Zeigt alle Früchte nach dem Hinzufügen

array_shift($fruits);
array_unshift($fruits, "Orange");
echo "Früchte nach Ersetzen des ersten Elements: " . implode(", ", $fruits) . "<br>"; // Zeigt alle Früchte nach dem Ersetzen
?></span>

<pre style="font-family: system-ui">
    <h3>// 2. Arbeiten mit assoziativen Arrays</h3>
$book = [
    "titel" => "Der große Gatsby",
    "autor" => "F. Scott Fitzgerald",
    "preis" => 14.99
];
$book['preis'] = 12.99;
$book['jahr'] = 1925;

echo "Buchdetails: Titel: " . $book['titel'] . ", Autor: " . $book['autor'] . ", Preis: " . $book['preis'] . "€, Jahr: " . $book['jahr'] . "<br>"; // Zeigt aktualisierte Buchdetails

</pre>

<span style="color: blue"><?php
// 2. Arbeiten mit assoziativen Arrays
$book = [
    "titel" => "Der große Gatsby",
    "autor" => "F. Scott Fitzgerald",
    "preis" => 14.99
];
$book['preis'] = 12.99;
$book['jahr'] = 1925;

echo "Buchdetails: Titel: " . $book['titel'] . ", Autor: " . $book['autor'] . ", Preis: " . $book['preis'] . "€, Jahr: " . $book['jahr'] . "<br>"; // Zeigt aktualisierte Buchdetails
?></span>

<pre style="font-family: system-ui">
    
<h3>// 3. Kombinieren von Arrays</h3>
$students = ["Alice", "Bob", "Charlie", "David", "Eva"];
$grades = [2, 1, 3, 2, 1];
$studentGrades = array_combine($students, $grades);

echo "Schüler und Noten: ";
foreach ($studentGrades as $student => $grade) {
    echo "$student hat eine $grade, ";
}
echo "<br>"; // Listet alle Schüler mit ihren Noten auf
</pre>

<span style="color: blue"><?php
// 3. Kombinieren von Arrays
$students = ["Alice", "Bob", "Charlie", "David", "Eva"];
$grades = [2, 1, 3, 2, 1];
$studentGrades = array_combine($students, $grades);

echo "Schüler und Noten: ";
foreach ($studentGrades as $student => $grade) {
    echo "$student hat eine $grade, ";
}
echo "<br>"; // Listet alle Schüler mit ihren Noten auf
?></span>