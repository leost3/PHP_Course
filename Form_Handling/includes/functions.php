<?php
function calcBmi($weight, $height, $metric) {
    if ($metric == 'LB' ) {
        $weight = $weight / 2.2;
    }
    $bmi = $weight / ($height * $height)*1000;
    echo " You bmi is ".$bmi;
}




?>