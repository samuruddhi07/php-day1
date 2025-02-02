<html>
    <body>
        <?php
        //cookies

        //set  $ca cookies
        $cookiename='langpreference';
        $cookievalue='french';
        $cookieexpire= time() + (180);
        setcookie($cookiename , $cookievalue , $cookieexpire ,"/");
        echo"cookie has been set!";

        //accesing the cookie
        if(isset($_COOKIE[$cookiename])){
            echo "<br> your language preference is:".$_COOKIE[$cookiename];
        }
        else{
            echo"<br> cookie is not set!";
        }

        //deleting cookie or block the cookie
        setcookie($cookiename,$cookievalue,time()- (30),"/");
        echo"<br> cookie has been deleted!";


        ?>
        </body>
</html>