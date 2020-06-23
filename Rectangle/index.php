<?php
    include('rectangle.php');
    $rec1 = new Rectangle(10,20);
    echo $rec1->width;
    echo $rec1->height;
    $rec1->display();