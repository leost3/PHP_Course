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


// -------------------------------------------------------

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

function compareKmLH($car1, $car2) {
    if ($car1["KM"] == $car2["KM"]) {
        return 0;
    }else if ($car1["KM"] > $car2["KM"]) {
        return 1;
    }
    return -1;
}

function sortByKmLH(&$cars) {
    usort($cars, "compareKmLH");
}

// -------------------------------------------------------------

function compareYearsHighLow($cars1, $cars2) {
    if ($cars1["Year"] == $cars2["Year"]) {
        return 0;
    }else if ($cars1["Year"] > $cars2["Year"]) {
        return 1;
    }
    return -1;
}

function sortYearHighLow($cars) {
    usort($cars,'compareYearsHighLow');
}


function compareYearsLowHigh($cars1, $cars2) {
    if ($cars1["Year"] == $cars2["Year"]) {
        return 0;
    }else if ($cars1["Year"] > $cars2["Year"]) {
        return -1;
    }
    return 1;
}

function sortYearLowHigh($cars) {
    usort($cars,'compareYearsLowHigh');
}

