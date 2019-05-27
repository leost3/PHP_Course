<html>
<body>
<?php
    $cars = array("Jeep", "Audi","Ford","BMW","Mazda");

    function Display_indexed($array) {
        // $count = count($array);

        // for ($i=0; $i<$count ; $i++) {
        //     echo $i." : ".$array[$i]."<br />";
        // }
        
        foreach($array as $value) {
            echo $value."<br />";
        }
    }

    
    echo " ---------------------------SORT-------------------------------<br />";
    
    sort($cars);
    rsort($cars); // reverse sort
    
    Display_indexed($cars);
    
    
    echo " ------------------------- DICTIONARY (ASSOCIATIVE ARRAYS) ---------------------------------<br />";
    
    $carsDictionary = array("Jeep"=>2019, "Audi"=>2015,"Ford"=>2018,"BMW"=>2014,"Mazda"=>2016);
    
    ksort($carsDictionary); // key sort
    asort($carsDictionary); // value sort
    arsort($carsDictionary); // reverse value sort
    krsort($carsDictionary); // reverse key sort
    function Display_Associative($arr) {
        foreach($arr as $key=>$value) {
            echo "$key : $value <br />";
        }
    }
    
    Display_Associative($carsDictionary);
    
    echo " ------------------------- INDEXED INDEXED ARRAYS ---------------------------------<br />";
    
    $carsAss = array(
        array("Jeep","BMW","Mazda"),
        array("Audi","Mercedes","Ford"),
        array("Hiunday","Kia","Toyota"),
    );    
    
    
    function Display1($array) {
        foreach($array as $row) {
            foreach($row as $value) {
                echo $value." ";
            }
            echo "<br />";
        }
    }
    
    Display1($carsAss);
    
    echo " ------------------------- ASSOCIATIVE INDEXED ARRAYS---------------------------------<br />";
    $carsAssIndexed = array(
       "America" => array("Jeep","BMW","Mazda"),
       "Japan" => array("Audi","Mercedes","Ford"),
       "Europe" => array("Hiunday","Kia","Toyota"),
    );    

    function Display2($array) {
        foreach($array as $key=>$row) {
            echo " $key : ";
            foreach($row as $value) {
                echo $value." ";
            }
            echo "<br />";
        }
    }

    Display2($carsAssIndexed);



    echo " ------------------------- INDEXED ASSOCIATIVE  ARRAYS)---------------------------------<br />";
    $carsIndexedAss = array(
       array("Jeep" => 2006,"BMW" => 2006,"Mazda" => 2006),
       array("Audi" => 2006,"Mercedes" => 2006,"Ford" => 2006),
       array("Hiunday" => 2006,"Kia" => 2006,"Toyota" => 2006),
    );
    
    function Display3($array) {
        foreach($array as $row) {
            foreach($row as $key=>$value) {
                echo "$key : $value , ";
            }
            echo "<br />";
        }
    }

    Display3($carsIndexedAss);
?>
</body>
</html>
