<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>


<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
}
.container{
        max-width: 80%;
        background: red;
        margin: auto;
        padding: 30px;
}
</style>
    
    <div class="container">
        <h1> This is first Heading</h1>
        
        <p> Your Party Status is here:</p>
    <?php 
        $age = 7;
        if($age>45){
            echo "you can go to the party";
        }

        else if($age==7){
            echo "you are 7 years old";
        }
        else
        echo "you can't go to the party";

        echo "<br>";

        $languages = array("python", "C#", "C++", "JavaScript");
        echo $languages[0];
        echo "<br>";


        $languages = array("python", "C#", "C++", "JavaScript");
        echo count ($languages);



    // Loops In PHP

    $a = 0;
    while($a<=10){
        echo " <br> The value a is : $a";
        $a++;
    }

    // Iterating arrays using while loop

    $a = 0;
    while($a < count($languages)){
        echo " <br> The value a is : $languages[$a] ";
        $a++;
    }

    // Iterating arrays using  do while loop

    $a = 0;
    do {
        echo " <br> The value a is : $languages[$a] ";
        $a++;
    }
    while($a < count($languages));

        // For LOop

    
    for ($a=0; $a <10 ; $a++) { 
        echo " <br> The value a is : $a";
    }

        // Foreach LOop

    foreach($languages as $value)
    echo " <br> The value from foreach loop is: $value"


    //  Funtions 

    

    ?>

<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?>

<?php function print_number($number){
        echo "<br>Your number  is: ";
        echo $number;

    }
    print_number(43);
    print_number(4);
    print_number(3);
?>



    </div>
</body>
</html>