
<head>
<body>
    <?php
    //inheritance
    class animal{
        public function makesounds(){
            return "some generic sound";
        }
    }
    class cat extends animal{
        public function makesound(){
            return "meow <br>";
        }
    }

    class dog extends animal{
        public function makesound(){
            return "bark <br>";
        }
    }

    $dog= new dog();
    echo $dog->makesound();
    $cat= new cat();
    echo $cat->makesound();



    ?>
    
</body>
</html>