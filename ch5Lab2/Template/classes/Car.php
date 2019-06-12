<?php
class Car {
    public static function Display($array) {

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
                echo "<h3>".$row["Year"].", ".$row["Make"].", ".$row["Model"].", ".$row["Color"].","    .$row["KM"]."</h3>";
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
}