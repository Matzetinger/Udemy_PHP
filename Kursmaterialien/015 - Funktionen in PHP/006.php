<?php


function calc(){
  $args = func_get_args();
  return array_sum($args);
  
}


function add(...$numbers){
  echo func_num_args();
  return array_sum($numbers);
}
//add(1,2,3,4,5,8);


echo calc(1,2,2,4);



?>











