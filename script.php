<?php

function nbYear($p0, $percent, $aug, $p) {
    if(!$percent && !$aug){
        return 0;
    }
    if(!$p0){
        return 0;
    }
    if($p0 >= $p){
        return 0;
    }

    $population = $p0;
    $years = 0;
    $percentConverted = $percent/100;
    while($population < $p){
        $population += $population * ($percentConverted) + $aug;
        $years++;
    }
    return $years;
}


$probe = \BlackfireProbe::getMainInstance();

$probe->enable();
nbYear(100, 5, 20, 200000);
$probe->disable();