<?php
    class Mobile{
        private $name;
        public $msg = "";
        public $inbox = [];
        public $outbox = [];

        public function __construct($name)
        {
            $this->name = $name;
        }
        public function setName($value){
            $this->name = $value;
        }
        private function getName(){
            return $this->name;
        }
        public function writeMSG($value){
            $this->msg = $value;
            echo $this->getName();
            // return $value;
        }

        private function receiveMSG($value){
            array_push($this->inbox, $value);
        }

        public function sendMSG($Mobile){
            array_push($this->outbox, $this->msg);
            $Mobile->receiveMSG($this->msg);
        }
        public function __destruct()
        {
            echo "<br/>".$this->name." is a box chat or mobile";
        }
    }
    const NAME = 'Oppo';
class BoxChat {
    public const name = 'Nokia';
    private $name;
    private $color;
    private $price;
    
    // public static $color = 'Red';
    

    
    // public static function increase(){
    //     BoxChat::NAME;
    // }
}