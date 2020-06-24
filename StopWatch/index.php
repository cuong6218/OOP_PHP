<?php

    include ('stopwatch.php');
    $rolex = new StopWatch();
    $rolex->start();
    echo 'Start Time: ';
    echo $rolex->getStartTime();
    echo "<br/>";
    $flag = false;
    for($i = 0; $i < 100000; $i++){
        $flag = true;
    }
    // usleep(10000000);
    $rolex->stop();
    echo 'End Time: ';
    echo $rolex->getEndTime();
    echo "<br/>";
    echo 'Time has pass: ';
    echo $rolex->getElapsedTime();
