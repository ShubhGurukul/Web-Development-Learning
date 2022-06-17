<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is body
    <br>
    <?php
    echo "This is php sentence <br>";
    eCho "To check case senstivity<br>";
    $color = 'Red';
    echo "Color of car is ". $color . "<br>";
    // echo "Color of car is ". $cOLor . "<br>"; // variable is case sensitive

    // This is a single-line comment

    # This is also a single-line comment
    /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
    */
    $sum = 5 /*Comment */ + 5;
    echo $sum;
    
    ?>
    <!-- Variables -->
    <?php

        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;
    ?>
    <!-- Variable Scope -->
    <?php
        $var1 = "Global"; // but not accessible inside the function
        global $var2;  // not accessible inside the function
        $var2= "Global var2";
        function myFunc(){
            $x = "Local"; // local cannot be access outside the function
            global $y ;
            $y= "Global";
            echo "Var1 = ". $var1 ."<br>";
            echo "Var2 = ". $var2 ."<br>";
        }
        myFunc();

        echo $y ;
    ?>
    <?php
    print "<h2>PHP is Fun!</h2>";
    print ("Hello world!<br>");
    print "I'm about to learn PHP!";
    $a = "ram";
    $b = "sita";
    print (" ".$a. "". $b);
    // print($a, $b);  nott working
    ?>
    <!-- Array -->
    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
      echo "$value <br>";
    }
    

    ?>

</body>
</html>