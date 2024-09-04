<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php

    // This is our veriables 
    $firstName = "Ankit panwar  Hello this is my first text in php, Hello my name is Ankit , How are you";
    echo $firstName
        ?></h1>
    <?php


    // how to use echo
    echo "Hello ankit";

    // using br tag in the php
    echo "<br/>";

    // what is differnec between echo and print
    print "hello world";

    // basically print only render the one value but echo render the multiple types of value like array and object
    
    // when we declare any variable we using the $ sign
    
    $name = "hello My name is ankit"; //declare a variable using $ symbole
    
    echo "<br/>";
    echo $name;

    // varibable cannot start number and numeric values
    // varibable cannot start special characters
    // when we declare any varibable using this type of nameing convenitions
    // $name , $NAME , $Name
    
    // There are 10 types of data in php
    
    // interger
    echo 14;
    echo "<br/>";

    // float
    echo 10.1;
    echo "<br/>";

    // string
    echo "Hello world";
    echo "<br/>";

    // booleans this operator return ture or false
    echo var_dump($firstName > 10);
    // var_dump basice define the variable data type and give how many charachers in the string or number
    

    // ---------------------------------------------------------------------------------------------------
    
    echo "<br />";
    echo "<br />";

    echo "we have many types of operator here is some expamples";

    // first we perform the Arthmatic operations
    
    echo "<br />";
    echo 10 + 10; //This is our addition operator
    echo "<br />";

    echo 20 - 10; //This is our substract operator
    echo "<br />";

    echo 10 * 10; //This is our mulitplication operator
    echo "<br />";

    echo 10 / 50; //This is our division operator
    echo "<br />";

    echo 10 % 25; //This is our modules operator
    echo "<br />";

    echo 18 ** 7; //This is our exponentiation
    echo "<br />";

    // ---------------------------------------------------------------------------------------------------  
    

    // Assignment Operators
    
    $mynum = 50; //This is our assingment operator
    $num = 80;
    $num1 = 40;
    $num2 = "40";
    echo $mynum; // Declare a variable
    echo "<br/>";
    echo $num1 += $num; // This is our addition assignment
    echo "<br/>";
    echo $num1 -= $num; // This is our subtraction assignment
    echo "<br/>";
    echo $num1 *= $num; // This is our multiplication assignment
    echo "<br/>";
    echo $num1 /= $num; // This is our division assignment
    echo "<br/>";
    echo $num1 %= $num; //This is our modulus assignment
    
    // ---------------------------------------------------------------------------------------------------  
    
    // Comparison Operators
    
    $a = 10;
    $b = 20;

    echo "<br/>";
    echo $a == $b ? "true" : "false"; //This is our double operator and this operator checks the varibable data value
    
    echo "<br/>";
    echo $a === $b ? "true" : "false"; //This is our triple equal opeatore and this operatore check the data and data type value
    echo "<br/>";

    echo $a != $b ? "true" : "false"; // This is our not equal operator 
    echo "<br/>";

    echo $a !== $b ? "true" : "false"; //This is our not double equal operator
    echo "<br/>";

    echo $a > $b ? "true" : "false"; //This is our grater then operatore
    echo "<br/>";

    echo $a < $b ? "true" : "false"; //This is our less then operatore
    echo "<br/>";

    echo $a >= $b ? "true" : "false"; //This is our grater then or equal operatore
    echo "<br/>";

    echo $a <= $b ? "true" : "false"; //This is our less than or equal to operatore
    echo "<br/>";

    echo $a <=> $b ? "true" : "false";
    echo "<br/>"; // This is our spaceship Returns an integer less thean equal to or greater than zero depending on if $a is less than equal to or gerater than $b
    

    // ---------------------------------------------------------------------------------------------------
    
    //   Increment or decrement operatore
    
    // This is two types of operatore like pre and post Here is some example 
    
    $x = 10;
    $y = 20;

    echo ++$x; //This is pre operatore
    echo "<br/>";

    echo --$x;
    echo "<br/>"; //This is our post opeator
    echo --$x; //This is our post operator
    
    echo "<br/>";

    // ---------------------------------------------------------------------------------------------------
    
    // Logical Operators
    
    $age = 18;
    $isStudent = true;
    if ($age > $age && $isStudent) {
        echo "true";
    } else {
        echo "false";
    } // This is our and && Operatore
    
    // we properly run the if else conditions , we need to understand how if else conditions work, and understand the switch statment
    
    echo "<br/>";
    $myname = "ankit";
    if ($myname == "ankit") {
        echo "$myname name is include in our dataBase";
    }

    echo "<br/>";
    echo "<br/>";

    if ($age < $age || $isStudent) {
        echo "true";
    } else {
        echo "false";
    } // This is our || or operatore
    
    echo "<br/>";

    // check elseif statements
    
    $country = "India";

    if ($country == "India") {
        echo "This is our country";
    } elseif ($country == "France") {
        echo "This is european country";
    } elseif ($country == "New York") {
        echo "This is an American country";
    } else {
        echo "Unknown country";
    }

    echo "<br/>";
    // switch statements
    
    $favColor = "Black";

    switch ($favColor) {
        case "red";
            echo "This is our red color";
            break;
        case "Black";
            echo "Black is my fav color";
            break;
        case "pink";
            echo "girls fav color pink";
            break;
        default:
            echo "Not matched any color";
    }



    echo "<br/>";

    // ---------------------------------------------------------------------------------------------------
    
    // String Operators
    
    $myString = "Hi my Name is ankit ";
    $Age = "and my age is 24";
    echo $myString . $Age; // This is our string operatore and i'm using dot . in php when we add to string using .dor operatore
    echo "<br/>";
    // -------------------------------------------------------------------------------------------------
    // loops
    
    // for loop
    
    for ($num = 0; $num < 5; $num++) {
        echo "This is our for loop " . $num;
        echo "<br/>";
    }

    // while loop 
    
    $loop = 1;
    while ($loop <= 5) {
        echo "This is our while loop" . $loop;
        echo "<br/>";
        $loop++;
    }

    // do while loop
    $count = 1;
    do {
        echo "This is our do while loop" . $count;
        echo "<br/>";
        $count++;
    } while ($count <= 5);

    echo "<br/>";

    // ---------------------------------------------------------------------------------------------------
    
    //  functions
    
    // basic functions
    
    function A1()
    {
        echo "I'm your basic function";
    }
    A1();
    echo "<br/>";


    // Perameter function 
    function A2($a, $b)
    {
        echo $a + $b;
        echo " i'm your perameter function";
    }
    A2(5, 8);
    echo "<br/>";

    // Nested functions
    
    function generate()
    {
        echo "Hi i'm your nested function";
        function apple()
        {
            echo "hello apple";
        }
        echo "<br/>";
        // apple();
    }
    generate();
    apple();

    echo "<br/>";

    // inbuilt functions in php
    
    $today = date("m-d-y");
    echo $today;
    echo "<br/>";
    echo rand();
    echo "<br/>";

    // important topics
    // Arrays
    
    $myarr = ["ankit", "mansi", "sanju", "other"];
    for ($i = 0; $i < count($myarr); $i++) {
        echo $myarr[$i];
        echo "<br/>";
        echo "<br/>";
    }

    // Associative Array
    
    $myuser = ["name" => "vijay", "city" => "Delhi", "email" => "ankit@gamil.com"];

    echo $myuser['name'];
    echo "<br/>";

    // multidimentional Array
    
    $users = [
        [1, "Ankit", "Karnal", "ankit@test.com"],
        [2, "komal", "Karnal", "komal@test.com"],
        [3, "Ritu", "Karnal", "Ritu@test.com"],
    ];

    for ($i = 0; $i < count($users); $i++) {
        for ($j = 0; $j < count($users[$i]); $j++) {
            echo $users[$i][$j];
            echo "<br>";
        }
    }
    ;
    echo "This is called multidimentional Array";

    // multidimentional array in table formate
    
    echo "<br/>";
    $user = [
        [1, "Ankit", "karnal", "ankit@test.com"],
        [2, "priya", "panipat", "priya@test.com"],
        [3, "komal", "karnal", "komal@test.com"],
        [4, "taniya", "panipat", "taniya@test.com"],
        [5, "kannu", "karnal", "kannu@test.com"],

    ];

    echo "<table border=1>";

    for ($i = 0; $i < count($user); $i++) {
        echo "<tr>";
        for ($j = 0; $j < count($user[$i]); $j++) {
            echo "<td>";
            echo $user[$i][$j];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br/>";
    // mantidimentional Associative Array
    
    $ourUsers = [
        [1, "Name" => "Anil", "City" => "Delhi", "email" => "anil@test.com"],
        [2, "Name" => "ronak", "City" => "gurgao", "email" => "ronak@test.com"],
        [3, "Name" => "ritu", "City" => "gurgao", "email" => "ritu@test.com"],
    ];

    echo "<table border=1>";

    foreach ($ourUsers as $myusers) {
        echo "<tr>";
        echo "<td>";
        echo $myusers["Name"];
        echo "</td>";
        echo "<td>";
        echo $myusers["City"];
        echo "</td>";
        echo "<td>";
        echo $myusers["email"];
        echo "</td>";

        echo "</tr>";

    }

    echo "</table>";

    // Array push, pop and splice method
    $userArr = ["Ankit", "subham", "kaalu"];
    print_r($userArr);
    echo "<br/>";

    // Array push
    
    array_push($userArr, "madahav", "akash");
    print_r($userArr);
    echo "<br/>";

    // Array pop
    array_pop($userArr);
    print_r($userArr);
    echo "<br/>";

    // Array Splice
    
    array_splice($userArr, 0, 3);
    print_r($userArr);

    // ------------------------------------------------------------------------------------------------------
    
    // how to a file create
    $fileName = "dummy.txt";
    $content = "hello i'm ankit and this is my file";
    $file = fopen($fileName, "w");

    // check if the file is successfully open
    
    if ($file) {
        fwrite($file, $content);
        fclose($file);
    } else {
        echo "file cannot be created";
    }























    // 
    





    ?>

</body>

</html>