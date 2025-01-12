<html>
    <body>
    <?php
    //control structures
    $name=" simmba ";
    if($name=="samruddhi"){
        echo $name."name is correct";
    }
    else{
        echo $name."name is not correct";
    }



    //conditional statement if and if--else
    $marks= 91;
     if($marks>= 80){
        echo " <br> you got grade A";
     }
     elseif($marks>= 60){
        echo " <br> you got grade B";
     }
     elseif($marks>= 40){
        echo " <br> you got grade C";
    
     }
     else{
        echo " <br> you got grade D";
     }


     //conditional statement switch
     echo "<br>";
     $day="sunday";
     switch($day){
        case "sunday":
        echo "its sunday !!!";
        break;
        case "monday":
        echo "its monday !!!";
        break;
        case "tuesday":
        echo "its tuesday !!!";
        break;
        case "wednesday":
        echo "its wednesday !!!";
        break;
        case "thursday":
        echo "its thursday !!!";
        break;
        default:
        echo " no mathing day found !!";
     }


     //iteratic control structures while loop
     echo "<br>";

     $count= 1;
     while($count<=10){
        echo " <br> count is".$count;
        $count++;
     }


     //iteratic control structures do while loop
     echo "<br>";
     $num= 1;
     do{
        echo "<br> do while number is".$num;
        $num++;
     }
     while($num<=3);

     //iteratic control structures for loop
     echo "<br>";
     for($i=1;$i<3;$i++){
        echo "<br> for loop number:".$i;
     }

     //iteratic control structures foreach loop
     echo "<br>";
     $array=["red","green","blue","yellow","pink"];
     foreach($array as $color){
        echo "<br> color:".$color;
     }

    ?>
    </body>
</html>












,