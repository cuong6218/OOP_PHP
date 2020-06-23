<?php
    class Rectangle{
        public $width;
        public $height;
        public function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea(){
            return $this->width * $this->height;
        }
        public function getPerimeter(){
            return ($this->width+$this->height)*2;
        }
        public function display(){
            echo "rectangle:<br/>width:".$this->width."<br/>height:".$this->height.
            "<br/>Area:".$this->getArea()."<br/>Perimeter:".$this->getPerimeter();
        }
    }
