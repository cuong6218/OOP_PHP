<?php
define ('SLOW', '1', true);
define ('MEDIUM', '2', true);
define ('FAST', '3', true);
    class Fan{
        private $speed;
        private $on;
        private $radius;
        private $color;
        function __construct(){
            $this->speed = SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = 'blue';
        }
        function setSpeed($value){
            $this->speed = $value;
        }
        function getSpeed(){
            return $this->speed;
        }

        function setOn($value){
            $this->on = $value;
        }
        function geton(){
            return $this->on;
        }

        function setRadius($value){
            $this->radius = $value;
        }
        function getRadius(){
            return $this->radius;
        }

        function setColor($value){
            $this->color = $value;
        }
        function getColor(){
            return $this->color;
        }
        function toString(){
            if ($this->on) echo "<br/>fan is on with speed: ".$this->getSpeed()." ,color: ".$this->getColor()." and radius: ".$this->getRadius();
            else echo "<br/>fan is off with color: ".$this->getColor()." and radius: ".$this->getRadius();
        }
    }