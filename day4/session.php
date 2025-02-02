</head>
<body>
    <?php

    //sessions
    //creating a session
    session_start();
    $_SESSION["username"]="john";
    $_SESSION["role"]="hacker";
    echo"session has been created! <br>";

    //accsessing session variables
    if(isset($_SESSION["username"])){
        echo "welcome " . $_SESSION["username"];
    }
    else{
        echo"no active session found!";
    }

    //destroying/killing/terminating the session
    session_unset();
    session_destroy();
    echo"<br> session has been terminated!";

    if(isset($_SESSION["username"])){
        echo "welcome" . $_SESSION["username"];
    }
    else{
        echo"<br> no active session found!";
    }

    ?>
    
</body>
</html>