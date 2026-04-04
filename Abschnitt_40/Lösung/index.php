<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <title>Kontaktformular</title>
</head>

<body>
  <h2>Kontaktformular</h2>
  <form method="post" action="validate_form.php">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name ?? '') ?>">
    <br>
    E-Mail: <input type="email" name="email" value="<?php echo htmlspecialchars($email ?? '') ?>">
    <br>
    Telefon: <input type="text" name="phone" value="<?php echo htmlspecialchars($phone ?? '') ?>">
    <br>
    <input type="submit" value="Senden">
  </form>
</body>

</html>

<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$ok = true;

// Überprüfen der Pflichtfelder
if (empty($name) || empty($email) || empty($phone)) {
    echo "Bitte füllen Sie alle Felder aus.<br>";
    $ok = false;
}

// Prüfen des Formats
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Bitte geben Sie eine gültige E-Mail-Adresse ein.<br>";
    $ok = false;
}

// Regulärer Ausdruck für die Telefonnummer
if (!preg_match('/^[0-9\-\(\)\/\+\s]*$/', $phone)) {
    echo "Bitte geben Sie eine gültige Telefonnummer ein.<br>";
    $ok = false;
}

// Regulärer Ausdruck für den Namen
if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
    echo "Bitte verwenden Sie nur Buchstaben im Namen.<br>";
    $ok = false;
}


?>