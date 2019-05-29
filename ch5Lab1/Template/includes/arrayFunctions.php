<?php

$cars = array
             ("Jeep" => array("Year" => 2014, "Make" =>"Jeep","Model" =>"Grand-Cherokee","Old_Price" => 48314, "Price"=>38500,"KM"=> "70","Color" => "Black", "Image" =>"Jeep.jpg"),

              "BMW" => array("Year" => 2016, "Make" =>"Jeep","Model" =>"X5 M","Old_Price" =>0, "Price"=>126000,"KM"=> "90","Color" =>"White", "Image" =>"BMW.jpg"),

              "Acura" => array("Year" => 2015, "Make" =>"ACURA","Model" =>"MDX","Old_Price" =>60876, "Price"=>54399,"KM"=> 50000,"Color" =>"Black", "Image" =>"Acura.jpg"),

              "Honda" => array("Year" => 2016, "Make" =>"Honda","Model" =>"Pilot","Old_Price" =>46320, "Price"=>44999,"KM"=> "60","Color" =>"Silver", "Image" =>"Honda.jpg"),

              "Audi" => array("Year" => 2015, "Make" =>"Audi","Model" =>"Q3","Old_Price" => 0, "Price"=>30988,"KM"=> "40000","Color" =>"Black", "Image" =>"Audi.jpg")
    );
    // sort
    // rsort
    // krsort
    // asort
    // arsort
    // that sorts the cars by Increasing order of Model.
    function sortByModel($asArray){
          
        foreach($asArray as $key => $row) {
            echo "$key";
            ksort($row);
        }
        // echo $asArray;    
    } 


    function Display($array) {
        echo "<table border='0'>";
        foreach($array as $key1 => $row ) {
            echo "<tr>";
                echo "<td>";
                // echo "<img src='./images/".$row["Image"]." />";
                echo "<img src=\"./images/".$row["Image"]."\" height= 'auto' width='250px'>";
                echo"</td>";
                // ----------
                echo "<td>";
                echo "<font color = '#FF0000'>";
                echo "<h3>".$row["Year"].", ".$row["Make"].", ".$row["Model"].", ".$row["Color"]."</h3>";
                echo"</font>";
                if ($row["Old_Price"] > 0) {
                    echo "<del style= \"color: #CC0000\">";
                    echo "<h3 style='color:#A9A9A9'>".$row["Old_Price"]."</h3>";
                    echo "</del>";
                }
                echo "<h3>$".$row["Price"];
                echo "<h3>".$row["KM"];
            echo "</tr>";
            echo "<br />";
        }
        echo "</table>";
    }

   













    function sortByPriceInc(&$asArray){..} that sorts the cars by Increasing order of Price.
    function sortByPriceDec(&$asArray){..} that sorts the cars by Decreasing order of Price.
    function sortByYearInc(&$asArray){..} that sorts the cars by Increasing order of Year.
    function sortByYearDec(&$asArray){..} that sorts the cars by Decreasing order of Year.
    function sortByKMInc(&$asArray){..} that sorts the cars by Increasing order of KM.
    function sortByKMDec(&$asArray){..} that sorts the cars by Decreasing order of KM. 




// Not sorted
// MOdel
// PRice: Low to High
// PRice: High to Low
// Km: High to Low
// Km: Low to High
// Year: new to Old
// Year: Old to New

?>