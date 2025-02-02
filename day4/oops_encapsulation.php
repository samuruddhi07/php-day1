
<head>
<body>
    <?php
    //encapsulation
    class bankaccount{
        private $balance;

        public function setbalance($amount){
            if($amount>0){
                $this->balance=$amount;
            }
        }
        public function getbalance(){
            return $this->balance;
        }
    }
    $amount=new bankaccount();
    $amount->setbalance(20000);
    echo "account balance: ".$amount->getbalance();

    ?>
    
</body>
</html>