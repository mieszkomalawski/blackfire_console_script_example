<?php

/*function danspower($num, $power) {
  $result = pow($num, $power);
  if($result % 2 === 0){
      return $result;
  }
  
  $leftOver = $result % 10;
  
  if($leftOver > 4){
     $result += 10;
  }
  return $result - $leftOver;
}*/

function danspower($num, $power) {
     
  $resultPower = pow($num, $power);

if ($resultPower%2 == 1){
  $resultat = (round($resultPower/10))*10;

}else{
  $resultat = $resultPower;
}
  return $resultat;
}

  

/*function danspower($num, $power){
  $result = pow($num, $power);
  if($result % 2 === 0){
      return $result;
  }
  
  $leftOver = $result % 10;
  
  if($leftOver > 4){
     return $result + 10 - $leftOver;
  }
  return $result - $leftOver;
}*/

$probe = \BlackfireProbe::getMainInstance();

$probe->enable();
danspower(9,15);
$probe->disable();