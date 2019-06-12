<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
// Concatanation
    /*
    $hour = "12";
    $hour .= $hour;
    echo"{$hour}AM</br>";
    echo $hour."AM</br>";
    echo $hourAM;
    */
//  ----------------------------------------

// 
    // $message = " hellow World</br> ";
    // echo "Normal:   ".$message;
    // echo strtolower("lowercase:   ".$message);
    // echo strtoupper("uppercase:   ".$message);
    // echo ucfirst("First letter uppercase:   ".$message);
    // echo ucwords("All initials uppercase:   ".$message);
    // echo strlen("String length:   ".$message." </br>");
    // echo strlen(trim("Remove spaces:   ".$message." </br>"));
    // echo strstr($message, "World");
    // echo str_replace("World","student",$message);
    // echo substr($message, 8, 5);

// --------------------
// $nbr = 3.14;
// echo floor($nbr)."</br>";
// $booll = false;
// echo $booll."</br>";
// // ---------------------
// $max = 100;
// echo ++$max."</br>";
// define("MAX_VALUE", 100);
// ECHO MAX_VALUE;
// --------------
$empName = "Stewart Laura";
$annualSallary = 45000;
$fedTax = 18.37;
$provTax = 20;
$annualTax = $annualSallary -($annualSallary-$annualSallary*$fedTax/100 + $annualSallary-$annualSallary+$provTax/100);
$netRate =($annualSallary - $annualSallary*$fedTax/100) + $annualSallary-$annualSallary+$provTax/100;

echo "Employee $empName is working in MediaInc </br> Her gross salary is $annualSallary and annual tax is $annualTax, her net pay is $netRate "


// // -----------------





// ?>
<!-- 

Compiler   - Reads all the file and if no error, returns a binary  
interpreter - Reads and return line by line

-->

<?php
    $vStatus = true;
    $vAge = 25;
    $vName = "Stewart Laura";
    $vSalary = 27733.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Variable</th>
            <th>Scalar</th>
            <th>Int</th>
            <th>Float</th>
            <th>Boolean</th>
            <th>String</th>
        </tr>
        <tr>
            <th>vStatus</th>
            <th><?php echo is_scalar($vStatus)?></th>
            <th><?php echo is_int($vStatus)?></th>
            <th><?php echo is_float($vStatus)?></th>
            <th><?php echo is_bool($vStatus)?></th>
            <th><?php echo is_string($vStatus)?></th>
            
        </tr>
        <tr>
            <th>vAge</th>
            <th><?php echo is_scalar($vAge) ?></th>
            <th><?php echo is_int($vAge) ?></th>
            <th><?php echo is_bool($vAge) ?></th>
            <th><?php echo is_bool($vAge) ?></th>
            <th><?php echo is_string($vAge) ?></th>
            
        </tr>
        <tr>
            <th>Name</th>
            <th><?php echo is_scalar($vName)?></th>
            <th><?php echo is_int($vName)?></th>
            <th><?php echo is_float($vName)?></th>
            <th><?php echo is_bool($vName)?></th>
            <th><?php echo is_string($vName)?></th>
            
        </tr>
        <tr>
            <th>vSalary</th>
            <th><?php echo is_scalar($vSalary)?></th>
            <th><?php echo is_int($vSalary)?></th>
            <th><?php echo is_float($vSalary)?></th>
            <th><?php echo is_bool($vSalary)?></th>
            <th><?php echo is_string($vSalary)?></th>
            
        </tr>
    </table>
    
</body>
</html>