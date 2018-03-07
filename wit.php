<?php
    echo "Hello World! <br/>";

    //variables
    $var1 = 5;
    $var2 = 8;
    $sum = $var1 + $var2;

    echo $var1. " + ". $var2. " = ". $sum. "</br>";

    //array
    $k = array();
    $k["name"] = "Sheila";
    $k["age"] = 12;

    //encode array to json
    echo json_encode($k)."</br>";

    foreach($k as $user){
        echo $user;
    }
?>