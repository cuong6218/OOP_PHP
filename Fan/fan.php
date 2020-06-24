<?php
    class Fan{
        const SLOW = 1;
        const MEDIUM = 2;
        const FAST = 3;
        private $speed = self::SLOW;
        private $on = false;
        private $radius = 5;
        private $color = 'blue';
        
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