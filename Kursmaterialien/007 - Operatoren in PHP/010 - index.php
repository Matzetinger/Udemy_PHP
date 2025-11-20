<?php

$zahlen = [5,2,7,9,8];

usort($zahlen, function($a, $b){
  return $b <=> $a;
});

print_r($zahlen);


?>
