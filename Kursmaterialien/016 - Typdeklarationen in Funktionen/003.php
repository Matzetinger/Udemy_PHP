<?php


function login(string $username, #[SensitiveParameter] string $password) {
  // Simuliere einen Fehler
  throw new Exception("Fehler beim Login");
}

try {
  login("benutzer", "geheim");
} catch (Exception $e) {
  echo $e->getMessage() . "\n";
  echo $e->getTraceAsString();
}



?>











