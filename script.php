<?php

function danspower($num, $power) {
  $result = pow($num, $power);
  if($result % 2 === 0){
      return $result;
  }
  
  $leftOver = $result % 10;
  
  if($leftOver > 4){
     $result += 10;
  }
  return $result - $leftOver;
}

danspower(9,15);