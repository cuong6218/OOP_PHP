<?php
    include('class.php');
    // $mobi1 = new Mobile('Oppo');
    // $mobi2 = new Mobile('Nokia');
    //     // echo $mobi1->name;
    //     // echo $mobi2->name;
    // $mobi1->setName('Iphone');
    // // echo $mobi1->getName();
    // echo "<br/>";
    // $mobi1->writeMSG('Hello Nokia');
    // $mobi1->sendMSG($mobi2);
    // print_r ($mobi2->inbox);

    // $box1 = new BoxChat('Yahoo');
    $box2 = new BoxChat(('Line'));
    // echo "<br/>";
    // $box1->writeMSG('Hello Line');
    // $box1->sendMSG($box2);
    // print_r ($box2->inbox);
    // echo BoxChat::$id;

    // BoxChat::increase();
    // echo BoxChat::$id;
    // $box1::echoMSG();
    // echo BoxChat::$color;
    // echo $box2->name;
    echo BoxChat::name;