<html>
    <body>
        <?php

        //functions
        function firstfunction(){
            echo "hello world!";
        }
        firstfunction();

        //with parameter function
        function greet($name){
            echo "<br> hello ".$name;
        }
        greet("class");

        //with default parameter function
        function defaultparameter($name="guest"){
            echo "<br> hello ".$name;
        }
        defaultparameter();
        defaultparameter("default parameter!");


        //function that returns value
        function multiply($a,$b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo "<br>".$result;
        

       //function by value by example
       function addten($num){
        $num+=10;
        echo "<br> function value:".$num;

    }
    $x=5;
    addten($x);
    echo"<br> original value:".$x;
    echo "<br>";
    
    //function by reference example

    
    function addtenbyrefer(&$num){
     $num+=10;
     echo "<br> function value:".$num;

 }
 $y=5;
 addtenbyrefer($y);
 echo"<br> original value:".$y;
 echo "<br>";

 //early return values in function(conditional return)
 function checkevenodd($num){
    if($num%2==0){
    return "even";
    }
    return"odd";
}
echo "<br>";
echo checkevenodd(18);
echo "<br>";
echo checkevenodd(15);
 


?>
</body>
</html>