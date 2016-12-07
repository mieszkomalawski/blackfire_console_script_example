<?php


function danspower($num, $power) {
     
  $resultPower = pow($num, $power);

if ($resultPower%2 == 1){
  $resultat = (round($resultPower/10))*10;

}else{
  $resultat = $resultPower;
}
  return $resultat;
}

danspower(9,15);
