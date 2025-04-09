<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation 
    </title>
</head>
<body>
 <h1>This is my php website</h1>


 <?php
 define('pi',3.14);//constant laii define gareko 

 echo "hello world";
 //this is not a case sensitive 
 $variable1 =10;
 $variable2 =20;
 echo $variable1+$variable2;
 echo "<br>";

 //operators in php 
//  Arithmetic operators
echo "The value of variable1 + variable 2 is :";
echo "<br>";
echo $variable1 + $variable2;
echo "<br>";
echo "The value of variable1 - variable 2 is :";
echo "<br>";
echo $variable1 - $variable2;
echo "<br>";
echo "The value of variable1 * variable 2 is :";
echo "<br>";
echo $variable1 * $variable2;
echo "<br>";
echo "The value of variable1 / variable 2 is :";
echo "<br>";
echo $variable1 / $variable2;
echo "<br>";




//  Assignment operators
$newvalue = $variable1;
$newvalue +=1;
// $newvalue -=1;
// $newvalue *=1;
// $newvalue /=1;
echo "The new value is :";

echo $newvalue;
echo "<br>";


//  Comparision Operators 
echo "The value of 5==10";
echo var_dump(5==10);
echo "<br>";

echo "The value of 5==10";
echo var_dump(5>10);
echo "<br>";

echo "The value of 5==10";
echo var_dump(5<10);
echo "<br>";

echo "The value of 5==10";
echo var_dump(5!=10);
echo "<br>";


//  Increment/Decrement operators
echo $variable1;

echo $variable1++;

echo "<br>";
echo $variable1++;
echo "<br>";
echo $variable1;
echo "<br>";
echo "<br>";

 echo $variable1--;
echo "<br>";
echo $variable1--;
echo "<br>";
echo $variable1;

echo "<br>";
echo "<br>";


echo $variable1++;
echo "<br>";

echo $variable1++;
echo "<br>";

//  Logical operators 

// and(&&)
$myvar =(true)&& (true);
echo var_dump($myvar);
echo "<br>";

$myvar =(true)&& (false);
echo var_dump($myvar);
echo "<br>";

$myvar =(false)&& (true);
echo var_dump($myvar);
echo "<br>";

$myvar =(false)&& (false);
echo var_dump($myvar);
echo "<br>";
echo "<br>";
//or(||)
$myvar =(true)|| (true);
echo var_dump($myvar);
echo "<br>";

$myvar =(true)|| (false);
echo var_dump($myvar);
echo "<br>";

$myvar =(false)|| (true);
echo var_dump($myvar);
echo "<br>";

$myvar =(false)|| (false);
echo var_dump($myvar);
echo "<br>";
echo "<br>";
//xor
$myvar =(true xor true);
echo var_dump($myvar);
echo "<br>";

$myvar =(true xor false);
echo var_dump($myvar);
echo "<br>";

$myvar =(false xor true);
echo var_dump($myvar);
echo "<br>";

$myvar =(false xor false);
echo var_dump($myvar);
echo "<br>";
echo "<br>";
 ?>

 <?php
 //Data types in php
            //  1.String
            //  2.Integer
            //  3.Float
            //  4.Boolean
            //  5.Array
            //  6.Object
            echo "Data Types <br>";
            $var ="This is a string";
            $var =55;
            echo var_dump($var);

            $var =55.5;
            echo var_dump($var);

            $var =true;
            echo var_dump($var);

            $var =true;
            echo var_dump($var);
            echo pi;

 ?>
 <?php
 
 ?>
</body>
</html>