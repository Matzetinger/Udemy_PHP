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




var_dump(function_exists("counts"));



?>











