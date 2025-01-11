<html>
<body>
    <?php
    //string operations


    //a.concatation
    $firstname="samruddhi";
    $lastname="mane";
    $fullname=$firstname."".$lastname;
    
    //b.string length
    $str="javapoint";
    echo strlen($str);

    //c.substring extraction
    $str="substr in php";
    echo substr($str,0,5);

    //d.case conversion
    $text="simmba the king";
    echo strtoupper($text);                                         //converts to uppercase
    echo strtolower($text);                                         //converts to lowercase
    echo ucfirst($text);                                            //capstalizes the first letter
    echo ucwords($text);                                            //capatalizes the first letter if each world

    //e.trimming
    $str=" friends ";
    echo trim($str);                                             //removes whitespace
    echo itrim($str);                                            //removes from the left
    echo rtrim($str);                                           //removes from the right 

    //f.reverse a string
    $str="hello,world!";
    echo strrev($str);

    //g.compares two strings(case-sensitive)
    echo strcmp("hello world!","hello php");

    //h.compares two strings(case-insensitive)
    echo strcasecmp("hello world!","hello php");


    //numeric operations


    //a.arithmetic operations
    $a=10;
    $b=3;
    echo $a+$b;
    echo $a-$b;
    echo $a*$b;
    echo $a/$b;
    echo $a%$b;
    echo $a**$b;
    
    //b.rounds up to the nearest integer
    echo ceil(6.8);

    //c.rounds down to the nearest integer
    echo floor(6.8);

    //d.returns the square root
    echo sqrt(25);

    //e.generates a random number between $min and $max
    echo rand(10,50);

    //f.checks if a value is numeric or not
    echo is_numeric(36);
?>
</body>
</html>





