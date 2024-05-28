
    <?php
    //Create a PHP function that takes in a string as an argument and returns the string with all vowels replaced with the character "x".


    $find = array("a","e","i","o","u");
    $replace = "x"; 
    $arr = array("Hello","world","!");
    //store the info in the variable $word to be used during the loop
    foreach ($arr as $word) { 
    // $find the array, $replace with X, in the variable $word
        echo str_replace($find, $replace, $word) . " ";
    }

    ?>


