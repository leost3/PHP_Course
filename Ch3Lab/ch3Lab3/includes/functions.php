<?php
    function calcIncomeTax($salary) {
        if ($salary == 42390 || $salary < 42390) {
            $rate = 0.16;
        }else if ($salary > 42390 && $salary <= 84780) {
            $rate = 0.20;
        }else if ($salary > 84780 && $salary <= 103150) {
            $rate = 0.24;
        }else {
            $rate = 0.2575;
        }

        return $salary * $rate;
    }

    function calcNetRate($salary, $calcIncomeTax) {
        return $salary - $calcIncomeTax;
    }


?>