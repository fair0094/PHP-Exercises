<!DOCTYPE html>
<html>
<body>


<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/

$food = ["Pasta", "Chicken", "Soup", "Ramen"];

echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

echo "<ul>
<li>{$food[0]}</li>
<li>{$food[1]}</li>
<li>{$food[2]}</li>
<li>{$food[3]}</li>

</ul>";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/


$food_assoc = [
    "Pasta" => "main course",
    "Chicken" => "side dish",
    "Soup" => "appetizer",
    "Ramen" => "full meal"
    
];

foreach($food_assoc as $key => $value){
    echo $key . " | " . $value . "<br>";
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece

  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$food_assoc = [
    "Pasta" => [
        "type" => "main course",
        "origin" => "Italy"
    ],
    "Chicken" => [
        "type" => "side dish",
        "origin" => "America"
    ],
    "Soup" => [ 
        "type" => "appetizer",
        "origin" => "France"
    ], 
    "Ramen" => [
        "type" => "full meal", 
        "origin" => "Japan"
    ]
];

echo "Pasta | {$food_assoc["Pasta"]["type"]} | {$food_assoc["Pasta"]["origin"]}";

echo "<br>";   
    
echo "Chicken | {$food_assoc["Chicken"]["type"]} | {$food_assoc["Chicken"]["origin"]}";
    
echo "<br>"; 
    
echo "Ramen | {$food_assoc["Ramen"]["type"]} | {$food_assoc["Ramen"]["origin"]}";    
 
echo "<br>";
    
echo "Soup | {$food_assoc["Soup"]["type"]} | {$food_assoc["Soup"]["origin"]}";     
    

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
    
echo "<br>";
echo "<br>";
    
echo "<table border= 1px>   
    <tr>
        <th>Food</th>
        <th>Type</th>
        <th>Origin</th>
    </tr>
    <tr>
        <td>Pasta</td>
        <td>main course</td>
        <td>Italy</td>
    </tr>
    <tr bgcolor=#dddddd>
        <td>Chicken</td>
        <td>side dish</td>
        <td>America</td>
    </tr>
    <tr>
        <td>Ramen</td>
        <td>full meal</td>
        <td>Japan</td>
    </tr>
    <tr bgcolor=#dddddd>
        <td>Soup</td>
        <td>appetizer</td>
        <td>France</td>
    </tr>
</table>"
    
        
?>


</body>
</html>