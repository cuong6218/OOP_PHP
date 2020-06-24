<?php
    class Quadra{
        private $a;
        private $b;
        private $c;
        public function __construct($a, $b, $c){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
       
        function getA(){
            return $this->a;
        }
        
        function getB(){
            return $this->b;
        }
        
        function getC(){
            return $this->c;
        }
        function getDelta(){
            return $this->b*$this->b-4*$this->a*$this->c;
        }

        function getRoot1(){
            if ($this->getDelta() > 0){
                return (- $this->b + sqrt($this->getDelta())) / (2*$this->a);
            }
        }
        function getRoot2(){
            if ($this->getDelta() > 0){
                return (- $this->b - sqrt($this->getDelta())) / (2*$this->a);
            }
        }

        function getRoot(){
            if ($this->getDelta() == 0){
                return -$this->b / (2 * $this->a);
            }
        }
        function checkDelta(){
            
             if ($this->getDelta() < 0) return "Phương trình vô nghiệm.";
        }
        function display(){
            if ($this->a == NULL) echo "";
            else if ($this->a == 0) echo 'Số thứ nhất = 0 nên là phương trình bậc nhất';
            else if ($this->getDelta() == 0)
                echo "Phương trình bậc hai có delta ".$this->getDelta()."<br/>Nghiệm kép: ".$this->getRoot();
            else if ($this->getDelta() > 0)
            echo "Phương trình bậc hai có delta ".$this->getDelta()."<br/>2 nghiệm: <br/>Nghiệm 1: ".$this->getRoot1()." và nghiệm 2: ".$this->getRoot2();
            else if ($this->getDelta() < 0) echo $this->checkDelta();
            
        }
    }