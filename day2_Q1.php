<?php 
//initialize the sum variable
$sum = 0;

//loop through numbers from 1 to 100
for($i=1;$i<=100;$i++){
    //check if the number is even
    if($i % 2 == 0){
        $sum+=$i; //add the even number to the sum
    }
}
//output the result
echo"the sum of all even numbers between 1 and 100 is:".$sum;
?>