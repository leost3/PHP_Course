<?php 
 function ComparePrice_High_Low($car1, $car2){
	 if($car1["Price"] == $car2["Price"]){
		 return 0;
	 }else if ($car1["Price"] > $car2["Price"]){
		 return -1;
	 }
	 return 1;
 }
 function SortByPrice_High_Low(&$cars){
	 usort($cars, "ComparePrice_High_Low");
 }
 //-----------------------------------------------
 function ComparePrice_Low_High($car1, $car2){
	 if($car1["Price"] == $car2["Price"]){
		 return 0;
	 }else if ($car1["Price"] > $car2["Price"]){
		 return 1;
	 }
	 return -1;
 }
 function SortByPrice_Low_High(&$cars){
	 usort($cars, "ComparePrice_Low_High");
 }
  //-----------------------------------------------
 function CompareYear_High_Low($car1, $car2){
	 if($car1["Year"] == $car2["Year"]){
		 return 0;
	 }else if ($car1["Year"] > $car2["Year"]){
		 return -1;
	 }
	 return 1;
 }
 function SortByYear_High_Low(&$cars){
	 usort($cars, "CompareYear_High_Low");
 }
 //-----------------------------------------------
 function CompareYear_Low_High($car1, $car2){
	 if($car1["Year"] == $car2["Year"]){
		 return 0;
	 }else if ($car1["Year"] > $car2["Year"]){
		 return 1;
	 }
	 return -1;
 }
 function SortByYear_Low_High(&$cars){
	 usort($cars, "CompareYear_Low_High");
 }
 //----------------------------------------------- 
 function CompareKM_High_Low($car1, $car2){
	 if($car1["KM"] == $car2["KM"]){
		 return 0;
	 }else if ($car1["KM"] > $car2["KM"]){
		 return -1;
	 }
	 return 1;
 }
 function SortByKM_High_Low(&$cars){
	 usort($cars, "CompareKM_High_Low");
 }
 //-----------------------------------------------
 function CompareKM_Low_High($car1, $car2){
	 if($car1["KM"] == $car2["KM"]){
		 return 0;
	 }else if ($car1["KM"] > $car2["KM"]){
		 return 1;
	 }
	 return -1;
 }
 function SortByKM_Low_High(&$cars){
	 usort($cars, "CompareKM_Low_High");
 }
 //----------------------------------------------- 
  
?>