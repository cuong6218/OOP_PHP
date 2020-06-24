<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <input type="text" name="number1" placeholder="type number one"/>
        <input type="text" name="number2" placeholder="type number two"/>
        <input type="text" name="number3" placeholder="type number three"/>
        <input type="submit" value="Calc"/>
    </form>
</body>
</html>
<?php
    include('quadra.php');
    if ($_SERVER['REQUEST_METHOD'] = 'POST'){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        $pt1 = new Quadra($number1, $number2, $number3);
        
        $pt1->display();
    }
?>