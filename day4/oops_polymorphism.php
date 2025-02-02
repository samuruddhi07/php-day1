
<head>
<body>
    <?php
    //polymorphism
    class shape{
           public function calculatearea(){
            return"area not defined!";
           }
        }
        class circle extends shape{
        public $radius;
        public function calculatearea(){
            return 3.14*($this->radius*$this->radius);
        }
        }    





    
     
    class rectangle extends shape{
        public $length;
        public $width;
        public function calculatearea(){
           return $this->length*$this->width;
        }    
    }

    $circle=new circle();
    $circle->radius=5;
    echo"circle area:".$circle->calculatearea()."<br>";

    $rect=new rectangle();
    $rect->length=5;
    $rect->width=10;
    echo"rect area:".$rect->calculatearea()."<br>";
    ?>
    
</body>
</html>