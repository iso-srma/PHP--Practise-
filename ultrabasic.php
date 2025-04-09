<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial </title>
    <style>
        .container{
            max-width: 80%;
            background-color: rgb(228,195,195);
            margin: auto;
            box-sizing: borderbox;
            padding: 23px;

        }
    </style>
</head>
<body>
    <div class="container">This is a container
        <h1>Let's learn about php</h1>
        <h2>Its me Ishwor sharma </h2>
        <?php
        $age=20;
        if($age>20){
            echo "you are allowed for  voting";
        }   
        else if($age==20){
            echo "You are 20 years old";
        }
        else{
            echo "Not alloed for voting";
        }
        ?>

       <?php
        $languages =array("Nepali" ,"hindi","urdu","engllish");

        echo $languages[0];
        echo $languages[3];
        echo $languages[2];

        echo "<br>";
        echo count($languages);

        //loops in php
        $a=0;
        while($a<10){
            echo "<br> The value of a is : ";
            echo $a;
            $a++;
        }
            $a=0;

        while($a < count($languages)){
            echo "<br> The value of language is : ";
            echo $languages[$a];
            $a++;
        }

        $a=0;
        do{
            echo "<br> The value of language is : ";
            echo $languages[$a];
            $a++;
        }while($a < count($languages))
        

       ?>
       <?php
       //for loop

for ($b = 60; $b < 70; $b++) {
    echo "<br> The value of b is: ";
    echo $b;
}
$fruits=array("apple","banana","orange","pineapple","pomogranite");

foreach($fruits as $value){
    echo "<br>The value is :";
    echo $value;
}

?>

    </div>
</body>
</html>