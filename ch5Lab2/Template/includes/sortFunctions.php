<?php




function ComparePrice_High_Low($car1,$car2) {
    if($car1["Price"] == $car2["Price"]) {
        return 0;
    }else if($car1["Price"] > $car2["Price"] ) {
        return -1;
    }
    return 1;
};

function sortByPrice_High_Low(&$cars) {
    usort($cars, "ComparePrice_High_Low");
}

function ComparePrice_Low_High($car1,$car2) {
    if($car1["Price"] == $car2["Price"]) {
        return 0;
    }else if($car1["Price"] > $car2["Price"] ) {
        return 1;
    }
    return -1;
};


function sortByPrice_Low_High(&$cars) {
    usort($cars, "ComparePrice_Low_High");
}




function compareKmHL($car1, $car2) {
    if ($car1["KM"] == $car2["KM"]) {
        return 0;
    }else if ($car1["KM"] > $car2["KM"]) {
        return -1;
    }
    return 1;
}


function sortByKmHL(&$cars) {
    usort($cars, "compareKmHL");
}

function compareKm($car1, $car2) {
    if ($car1["KM"] == $car2["KM"]) {
        return 0;
    }else if ($car1["KM"] > $car2["KM"]) {
        return 1;
    }
    return -1;
}


// $cars = array("Jeep"=> array("Year"=>2014, "Make"=>"Jeep" , "Model" =>"Grand-Cherokee", "Old_Price"=>48314 , "Price"=>38500 , "KM"=>"70,000", "Color"=>"Black" , "Image"=>"Jeep.jpg" ),
//               "BMW"=>  array("Year"=>2016, "Make"=>"BMW" , "Model" =>"X5 M", "Old_Price"=>0 , "Price"=>126000 , "KM"=>"90", "Color"=>"White" , "Image"=>"BMW.jpg" ),
// 			  "Acura"=>array("Year"=>2015, "Make"=>"Acura" , "Model" =>"MDX", "Old_Price"=>60876 , "Price"=>54399 , "KM"=>"50,000", "Color"=>"Black" , "Image"=>"Acura.jpg" ),
// 			  "Honda"=>array("Year"=>2016, "Make"=>"Honda" , "Model" =>"Pilot", "Old_Price"=>46320 , "Price"=>44999 , "KM"=>"60", "Color"=>"Silver" , "Image"=>"Honda.jpg" ),
// 			  "Audi"=> array("Year"=>2015, "Make"=>"Audi" , "Model" =>"Q3", "Old_Price"=>0 , "Price"=>30988 , "KM"=>"40,000", "Color"=>"Black" , "Image"=>"Audi.jpg" )
// 			  );
			  

// ?>