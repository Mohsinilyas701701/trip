<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
    this is my first website
    </div>

    <?php
    echo "Hello there This is my first website"
    ?>

    <?php

    
    ?>
    <?php
    $var1 = 5;
    $var2 = 4;

    echo "Var1 + Var2 is equals to";
    echo "<br>";
    echo $var1 + $var2;

    $newvar= $var1;
    echo "<br>";
    echo "Value of new var is equals to";
    echo $newvar;
    echo "<br>";
    $newvar +=1;
    echo $newvar;
    echo "<br>";

    ?>

    <?php
    echo " The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo " The value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";

    echo " The value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";

    echo " The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";

    // echo $var1++;
    // echo $var1--;
    // echo "<br>";

    // echo $var1;
    
    echo ++$var1;
    echo "<br>";

    echo $var1;
    echo "<br>";

    // echo --$var1;

    // $myVar = !(true);
    // echo var_dump($myVar);

    $var3 = "This is a string";
    echo var_dump($var3);
    echo "<br>";

    $var3 = 666;
    echo var_dump($var3);
    echo "<br>";

    $var3 = 66.1;
    echo var_dump($var3);
    echo "<br>";

    $var3 = true;
    echo var_dump($var3);
    echo "<br>";


    ?>

    <?php>
</body>
</html>