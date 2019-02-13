<?php
/*
+---+
| 1 |
+---+
Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/

/*
Call the function.
*/


function greeting($welcome){
    echo $welcome;
}

//calling the function  
greeting('<p>Welcome to the well structured code.</p>');



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/

/*
Call the function with the values for paremeters.
*/



 
function calculateArithmeticMean ($a, $b, $c) {
    echo ($a + $b + $c) / 3; 
}

calculateArithmeticMean(5, 5, 5);



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/

/*
Declare the variable total
and assign it with the value 
that calculateTotalPrice outputs 
when it is called (with the value for price parameter).
*/

/*
Print total.
*/



function calculateTotalPrice($price) {
    echo ($price * 0.13) + 249.00;
}


calculateTotalPrice(249.00);

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare the global variable length and assign it with the value 12.
Declare the global variable width and assign it with the value 6.



Declare the function named calculateRectangleArea. 

This function calculates and prints the area of rectangle based on the 
global variables length and width.

Make these variables accessible inside the local scope, and do the calculation and printing
*/

/*
Call the function.
*/


$length = 12;
$width = 6; 

function calculateRectangleArea() {
    global $length, $width; 
    echo $length * $width; 
}

calculateRectangleArea();



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
If the function for calculating the area of a triangle looks like this:
*/
//function calculateTriangleArea($base, $height) {
//    $area =  ($base * $height) / 2;
//}

/*
What can you do to make the $area accessible in global scope 
(without using the return statement)?
*/

/*
Choose the values for parameters and call the function.
*/

//Print $area.

//function testScope($fish, $two) {
//    global $loc; 
//    $loc = $fish + $two;    
//}
//
//testScope(2, 4);
//echo $loc;


//function calculateTriangleArea($base, $height) {
//    global $area; 
//    $area = ($base * $height) / 2;    
//}
//
//calculateTriangleArea(2, 4);
//echo $area;


function calculateTriangleArea($base, $height) {
    $area = ($base * $height) / 2;
    $GLOBALS["area"] = $area;
}

calculateTriangleArea(2, 4);
echo $GLOBALS["area"];


?>