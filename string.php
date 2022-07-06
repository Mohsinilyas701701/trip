<?php

    $str = "This is a code";
    echo $str;

    echo "<br>";

    $len= strlen("This string has lenght of ");
    echo "This string has lenght of :" .$str ;

    echo "The number of this words in this string are :" . str_word_count($str);
    echo "<br>";


    echo "The reverse of this string is :" .strrev($str);
    echo "<br>";


    echo "The position of in the string is :" .strpos($str , "is");
    echo "<br>";

    echo "The position of in the string is :" .str_replace("is" , "at" , $str);


    

?>