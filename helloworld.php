<html>
<body>
<?php
//this is single line comment
//echo "hello world!"
echo "Hello World!";
echo "this is comment example";

//scalar types
$name="samruddhi";  //sring
$age=17;           //integer
$time=14.45;      //float
$class=true;     //boolean

//compoud types
$student_arr=array("sayali","kiran","sakshi");//arrays
class students{                //class
    public $marks;     
}

$stud=new students();          //object
$stud->name=90;

//special types
$null_var=null;

echo " <br> sring:", $name;
echo " <br> integer:", $age;
echo " <br> float:", $time;
echo " <br> boolean:", $class;
echo " <br> array:",$student_arr[0];

//echo "object:",$stud;
echo " <br> null:", $null_var;
/*this is multiline comments
developed for php session*/
?>
</body>
</html>