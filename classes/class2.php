<!-- 15/05/2019 -->

<body> 
<?php       
    echo "My application is ". getEnv("APP_NAME");
    echo  "<br />";      
    putEnv("APP_NAME=Example 4");      
    echo "My application is ". getEnv("APP_NAME");  
    echo  "<br />";





//  FUNCTIONS 

$var1 = 0;
$var2 = "";
$var3;
$var4 = NULL;
// Check if var is NULL
echo "isset(var1)= ".isset($var1)."</br>"; 
echo "isset(var2)= ".isset($var2)."</br>"; 
echo "isset(var3)= ".isset($var3)."</br>"; 
echo "isset(var4)= ".isset($var4)."</br>"; 
echo "</br>";
// Check if var is empty
echo "empty(var1)= ".empty($var1)."<br/>"; 
echo "empty(var2)= ".empty($var2)."<br/>"; 
echo "empty(var3)= ".empty($var3)."<br/>"; 
echo "empty(var4)= ".empty($var4)."<br/>"; 
echo "</br>";
// Check type of Var
echo "gettype(var1)= ".gettype($var1)."<br/>"; 
echo "gettype(var2)= ".gettype($var2)."<br/>"; 
echo "gettype(var3)= ".gettype($var3)."<br/>"; 
echo "gettype(var4)= ".gettype($var4)."<br/>"; 
echo "</br>";

// Comparison

$var5 = 5;
$var6 = "55";

if ($var5 == $var6 ) {
    echo "They are equal";
}else {
    echo "They are not equal";

}
if ($var5 === $var6 ) {
    echo "They are identical";
}
// Date
date_default_timezone_set('America/Montreal'); 
$v_date = date('l jS \of F Y H:i:s A');
echo "Current Date and Time is : $v_date <br/>";  
$time = date("H"); 
if ($time < "20") {   
    echo "Have a good day!";
} 

?>
</body>

