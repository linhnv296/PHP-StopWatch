<?php


class StopWatch{
    private $startTime;
    private $endTime;
    function getterStartTime(){
        return $this->startTime;
    }
    function getterEndTime(){
        return $this->endTime;
    }

    function start(){
        $this->startTime = microtime(s);
        return $this->startTime;
    }
    function end(){
        $this->endTime = microtime(s);
        return $this->endTime;
    }
    function getElapsedTime(){
        $times = $this->endTime - $this->startTime;
        return $times;
    }
}
