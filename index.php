
<?php
/* Day 1 Basic program 

    echo"I like a burerrr <br>";
    echo"I like masu and bhatt";
    //This is a comment 
    /* This is
    a multiline
    comment 
    */
    
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Order  masubhaat</button>
</body>
</html>
-->




<?php 
/* Day -2 Data Types 

//strings
    $name = "Ishwor Sharma ";
    $food="pizza";
    $email="isosrmaa@gmail.com";
//integers
    $age=21;
    $users=2;
    $quantity=5;
//Floats
    $gpa=3.60;
    $price=4.99;
    $tax_rate=13.5;
//boolean
    $employed=true;//display 1
    $online=false;// nothing can be displayed for false 
    $for_sale=true;// display 1

    echo $name;
    echo "<br>Hello {$name}<br>";
    echo "You like a food {$food}<br>";
    echo"Your Email is {$email}";

    echo"<br>Your are {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You are like to buy {$quantity} items<br>";

    echo"Your Gpa is {$gpa}<br>";
    echo"Your pizza is \${$price}<br>";
    echo"Your tax rate is {$tax_rate}";

    echo"<br>Online status : {$online}";
    echo"<br>Employed  : {$employed}";
    echo"<br>It is for sale  : {$for_sale}";

    $total=null;

    echo"You have ordered {$quantity}*{$food}<br>";
    $total =$quantity*$price;
    echo"Your Total is :\${$total}";
    
?>*/
?>



<?php
/*

//Day -3  Arithmetic Operators  (+,-,*,/,%)

    $x=10;
    $y=20;
    $sum=null;
    $mul=null;

    $sum = $x+$y;
    $sub = $x-$y;

    // $mul = $x*$y;
    // $Div= $x/$y;
    // $Mod = $x%$y;

   

    echo "The sum of two number is {$sum}<br>";
    printf( "Subtraction is $sub<br>");


    // //Increament or decrement operators 
    // $counter =10;
    // $counter=$counter+1;//$counter++;
    // //counter--
    // echo $counter;
    
//operator precendence 
    //()
    // **
    // * / %
    // + -

    $total = 5 + 2  - 10 * 7 / 5 ** 9;
    echo $total;
*/

?>


<?php
//Day-4 Get  and  post//////////////////////////////

// $_GET, $_POST = special variables used to collect data from an HTML form
// data is sent to the file in the action attribute of <form>
// <form action="some_file.php" method="get">
//$_GET = Data is appended to the url
// NOT SECURE
// char limit
// Bookmark is possible w/ values
// GET requests can be cached
// Better for a search page
//$_POST = Data is packaged inside the body of the HTTP request
// MORE SECURE
// No data limit
// Cannot bookmark
// GET requests are not cached
// Better for submitting credentials
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">
<label>username:</label><br>
<input type="text" name="username"><br>
<label>password: </label><br>
<input type="password" name="password" require><br>
<input type="submit" value="Log in">
</form>
</body>
</html>

<?php
// echo $_GET["username"] ."<br>";
// echo $_GET["password"] ."<br>";

echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} <br>";


?> -->

<!-- USING POST METHOD FOR MORE SEURITY OF DATA 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="post">
<label>username:</label><br>
<input type="text" name="username"><br>
<label>password: </label><br>
<input type="password" name="password" require><br>
<input type="submit" value="Log in">
</form>
</body>
</html>

<?php
// echo $_GET["username"] ."<br>";
// echo $_GET["password"] ."<br>";

echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";


?> -->

//practise 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Quantity :</label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $item="Masu Bhaat";
    $price=10.5;
   $quantity = $_POST["quantity"];
   $total = null;

   $total = $quantity * $price;

   echo "You have ordered {$quantity} * {$item}/s <br>";
   echo "Your total is : \${$total}";
    
?>






