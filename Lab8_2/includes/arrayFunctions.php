<?php 

/* ------ Sorting by Make ------ */
function sortByModel(&$myArray){
	ksort($myArray);
}
/* ------ Sorting by Price ------ */
function comparisonByPriceInc($array1 , $array2){
	if($array1['Price'] == $array2['Price'])
		return 0;
	elseif ($array1['Price']>$array2['Price'])
		return 1;
	else
		return -1;
}
function comparisonByPriceDec($array1 , $array2){
	if($array1['Price'] == $array2['Price'])
		return 0;
	elseif ($array1['Price']>$array2['Price'])
		return -1;
	else
		return  1;
}
function sortByPriceInc(&$myArray){
	uasort($myArray, "comparisonByPriceInc");
}
function sortByPriceDec(&$myArray){
	uasort($myArray, "comparisonByPriceDec");
}
/* ------ Sorting by Year ------ */
function comparisonByYearInc($array1 , $array2){
	if($array1['Year'] == $array2['Year'])
		return 0;
	elseif ($array1['Year']>$array2['Year'])
		return 1;
	else
		return -1;
}
function comparisonByYearDec($array1 , $array2){
	if($array1['Year'] == $array2['Year'])
		return 0;
	elseif ($array1['Year']>$array2['Year'])
		return -1;
	else
		return  1;
}
function sortByYearInc(&$myArray){
	uasort($myArray, "comparisonByYearInc");
}
function sortByYearDec(&$myArray){
	uasort($myArray, "comparisonByYearDec");
}
/* ------ Sorting by KM ------ */
function comparisonByKMInc($array1 , $array2){
	if($array1['KM'] == $array2['KM'])
		return 0;
	return ($array1['KM']<$array2['KM'])?1:-1;
}
function comparisonByKMDec($array1 , $array2){
	if($array1['KM'] == $array2['KM'])
		return 0;
	return ($array1['KM']<$array2['KM'])?-1:1;
}
function sortByKMInc(&$myArray){
	uasort($myArray, "comparisonByKMInc");
}
function sortByKMDec(&$myArray){
	uasort($myArray, "comparisonByKMDec");
}
?>