<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Bài 4
    echo "<h3>Bài 4:</h3>";

    $String = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
    $line = explode("\n", $String);
    echo "<pre>";
    var_dump($line);
    echo "</pre>";

    //Bài 5
    echo "<h3>Bài 5:</h3>";
    //Hàm settype() trong PHP
    echo "<h4>Hàm settype() trong PHP</h4>";
    $a = "32"; // string 
    settype($a, "integer"); // $a is now integer
    echo "$a is now integer";
    echo "<br>";

    $b = 31; // integer 
    settype($b, "string"); // $b is now string
    echo "$b is now integer";
    echo "<br>";

    $c = true; // boolean 
    settype($c, "integer"); // $c is now integer (1)
    echo "$c is now integer";
    echo "<br>";

    //Hàm gettype() của PHP
    echo "<h4>Hàm gettype() trong PHP</h4>";
    $a = 3;
    echo gettype($a) . "<br>";

    $b = 3.2;
    echo gettype($b) . "<br>";

    $c = "Hello";
    echo gettype($c) . "<br>";

    $d = array();
    echo gettype($d) . "<br>";

    $e = array("red", "green", "blue");
    echo gettype($e) . "<br>";

    $f = NULL;
    echo gettype($f) . "<br>";

    $g = false;
    echo gettype($g) . "<br>";

    //str_contains:được sử dụng để kiểm tra xem một chuỗi có chứa một chuỗi con cụ thể hay không.
    //  Nó trả về giá trị boolean true hoặc false tương ứng với kết quả của việc tìm thấy 
    //  hoặc không tìm thấy chuỗi con trong chuỗi
    echo "<h4>Hàm str_contains() trong PHP</h4>";
    $Array = "Hello world";
    $Test = "world";
    if (str_contains($Array, $Test)) {
        echo "Có chứa '$Test' trong '$Array'";
    } else {
        echo " Không có chứa $Test trong $Array";
    }
    echo "<br>";

    //str_starts_with : kiểm tra xem một chuỗi có được bắt đầu bởi một chuỗi nào đó không?
    echo "<h4>Hàm str_starts_with() trong PHP</h4>";
    $Array = "Hello world";
    $Test = "Hello";
    if (str_starts_with($Array, $Test)) {
        echo "Hàm bắt đầu bằng 'Hello'!";
    } else {
        echo "Hàm không bắt đầu bằng 'Hello'!";
    }
    echo "<br>";

    //str_ends_with
    echo "<h4>Hàm str_ends_with() trong PHP</h4>";
    $Array = "Hello world";
    $Test = "world";
    if (str_ends_with($Array, $Test)) {
        echo "Hàm có kết thúc bằng 'world'!";
    } else {
        echo " Hàm không kết thúc bằng 'world'!";
    }
    echo "<br>";
    ?>

    <h1>Bài 6</h1>
    
</body>

</html>