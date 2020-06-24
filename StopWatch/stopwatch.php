<?php
use \Datetime;
    class StopWatch extends Datetime{
        public $startTime;
        public $endTime;
        public function __construct()
        {
        }
        public function getTimeSystem(){
            return microtime(true);
        }
        public function getStartTime(){
            return round($this->startTime,3);
        }
        public function getEndTime(){
            return round($this->endTime,3);
        }
        public function start(){
            $this->startTime = $this->getTimeSystem();
        }
        public function stop(){
            $this->endTime = $this->getTimeSystem();
        }
        // public function timeHasPass(){
        //     usleep(10000000);
        // }
        public function getElapsedTime(){
            $result = $this->getEndTime() - $this->getStartTime();
            return $result;
        }

    }
