<?php
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
    
?>