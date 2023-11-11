<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Hàm ẩn danh
    echo "<h3>Hàm ẩn danh</h3>";
    $say = function($name){
        echo " Hello " . $name ;
    };
    $say("World");

    function myCall($myCallBack){
        echo $myCallBack();
    }
    myCall( function() { echo " Hello ";});

    $a = array(1,2,3,4,5);
    $b = array_map(function($n){
        return $n * $n * $n;
    }, $a);
    print_r($b);
    echo "<br>";

    //Generator
    echo "<h3>Generator</h3>";
    function countToFive(){
        yield 1;
        yield from [2,3,4];
        yield 5;
    }
    foreach ($a as $k => $v) { 
        echo $v;
    }

    //Bài 3
    echo "<h3>Bài 3:</h3>";
    $a = " 082307 ";
    $c = substr($a,1,2);
    $b = chunk_split($c,2,':');
    echo $b;
    $c = substr($a,3,2);
    $b = chunk_split($c,2,':');
    echo $b;
    $c = substr($a,5,2);
    $b = chunk_split($c,2);
    echo $b;

    ?>
</body>
</html>