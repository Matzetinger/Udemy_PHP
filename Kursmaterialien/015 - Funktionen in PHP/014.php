<?php



function counts(){
  static $cache = 0;
  $cache++;


  if($cache >= 10){
    echo "Cache is greater den 10 or the same" . "<br>";
    return;
  }
  echo $cache . "<br>";
}

counts();
counts();
counts();

echo "Hello World" . "<br>";
counts();
counts();
counts();
counts();
counts();
counts();
counts();
counts();
counts();
counts();


?>











