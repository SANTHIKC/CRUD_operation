<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a= 32;
    echo var_dump($a)  ."<br>";
     $b= "Hello World";
    echo var_dump($b)  ."<br>";
     $c= 32.5;
    echo var_dump($c)  ."<br>";
     $d= array("red","blue","green");
    echo var_dump($d)  ."<br>";
     $e= array(32,"Hello World!", 32.5, array("red","blue","green"));
    echo var_dump($e)  ."<br>";
    // Dump two variables
    echo var_dump($a,$b) ."<br>"
    ?>
</body>
</html>