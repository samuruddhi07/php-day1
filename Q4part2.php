<!DOCTYPE html>
<html>
    <head>
        <title>Feedback Submission</title>
</head>
<body>
    <h2>Feedback Submission</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $message=$_POST["message"];

        echo"thank you for your feedback!";
        echo"<h3>Submitted Feedback:</h3>";
        echo"Name:$name<br>";
        echo"Mobile Number:$mobile<br>";
        echo"Email:$email<br>";
        echo"Message:$message<br>";
    }else{
        echo"Invalid Submission";
    }
    ?>
    </body>
</html>
    