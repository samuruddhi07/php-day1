<?php

//crating an associative array with cities and their populations

$cities=[
    "chandigarh" => 1054686,
    "bhopal"     => 2368145,
    "faridabad"  => 1809733
];
 
//finding the city with highest population
$highest_population = array_keys($cities,max($cities))[0];

//printing the city with the highest population
echo" the city with highest population is $highest_population "
?>