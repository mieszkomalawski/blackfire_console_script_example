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


$probe = \BlackfireProbe::getMainInstance();

$probe->enable();
danspower(9,15);
$probe->disable();