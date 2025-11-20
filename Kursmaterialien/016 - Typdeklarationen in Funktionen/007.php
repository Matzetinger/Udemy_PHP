<?php


enum Colors{
  case Rot;
  case Grün;
  case Blau;
}



function beschreibeFarbe(Colors $farbe): string {
  return match($farbe) {
      Colors::Rot => 'Die Farbe ist Rot.',
      Colors::Blau => 'Die Farbe ist Blau.',
      Colors::Grün => 'Die Farbe ist Grün.',
  };
}

echo beschreibeFarbe(Colors::Grün);


?>











