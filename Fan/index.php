<?php
    include('fan.php');
    $fan1 = new Fan();
    
    $fan1->setSpeed(Fan::FAST);
    $fan1->setRadius(10);
    $fan1->setColor('yellow');
    $fan1->setOn(true);

    $fan2 = new Fan();

    $fan2->setSpeed(Fan::MEDIUM);
    $fan2->setRadius(5);
    $fan2->setColor('blue');
    $fan2->setOn(false);

    $fan1->toString();
    $fan2->toString();
