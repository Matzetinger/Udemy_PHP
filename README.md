# Udemy_PHP

Kurs-Abschnitte im Bereich PHP

BrowserSync Verwenden:

Installieren Sie Node.js (falls noch nicht geschehen).
Installieren Sie BrowserSync global über die Befehlszeile:
--- npm install -g browser-sync. ---
Navigieren Sie in der Befehlszeile zu Ihrem Projektordner innerhalb des XAMPP htdocs Verzeichnisses.
Starten Sie BrowserSync mit folgendem Befehl, wobei Sie den URL Ihres XAMPP-Servers angeben (standardmäßig localhost):

---- browser-sync start --proxy "localhost/Ihr*Projektname" --files "**/\*.php, **/*.html, \*\*/_.css, \*_/\_.js" ----

BrowserSync öffnet automatisch einen neuen Browser-Tab, der sich bei jeder Speicherung einer überwachten Datei automatisch aktualisiert.

script erstellt in Package.json:
Befehl für schnell start: --- npm run liveserver --
