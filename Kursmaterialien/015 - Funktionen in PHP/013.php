<?php

function gen(){
  yield 1;
  yield 2;
  yield 3;
}


foreach (gen() as $wert) {
  echo $wert . "<br>";
}

////


function numGen($start, $end){
  for($i = $start; $i <= $end; $i++){
    yield $i;
  }
}


foreach (numGen(1,10) as $key) {
  echo $key . "<br>";
}


?>











