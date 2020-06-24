<?php
use \Datetime;
// date_default_timezone_set('UTC');
    class StopWatch extends Datetime{
        private $startTime;
        private $endTime;
        public $result = "";
        public function __construct()
        {
        }
        public function getTimeSystem(){
            return microtime(true);

            // return date('H:i:s');
        }
        public function getStartTime(){
            return round($this->startTime,3);

            // return $this->startTime;
        }
        public function getEndTime(){
            return round($this->endTime,3);

            // return $this->endTime;
        }
        public function start(){
            $this->startTime = $this->getTimeSystem();
        }
        public function stop(){
            $this->endTime = $this->getTimeSystem();
        }
        // public function timeHasPass(){
        //     usleep(1000000);
        // }
        public function getElapsedTime(){
            $diff = $this->getEndTime() - $this->getStartTime();
            return $diff;

            // $diff = abs(strtotime($this->getEndTime()) - strtotime($this->getStartTime()));
            // echo $diff." second<br/>";
            // return date('H:i:sa', $diff);
        }

    }
