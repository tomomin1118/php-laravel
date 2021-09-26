<?php
//1
function num($i) {
    
    return $i * 2;
}

echo num(5). "\n";

//2
function add($a, $b) {
    $goukei = 0;
    $goukei = $a + $b;
    
    return $goukei;
}

echo add(10, 5). "\n";

//3
function answer($arr) {
    $max = 1;
    foreach ($arr as $arr_1) {
        $max = $max * $arr_1;
    }
    
    return $max;
}

echo answer(array(1, 3, 5, 7, 9)). "\n";

//4
function max_array($arr) {

    $max_number = $arr[0];
    foreach( $arr as $a) {
        if ( $max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}

//5
//strip_tags
$test = "<p>プログラミングを学ぶ。</p><h3>PHPを学ぶ</h3>";
echo $test."\n";

$new_test = strip_tags($test,"<h3>");
echo $new_test."\n";

//array_push
$stack = array("orange","banana");
array_push( $stack, "apple", "raspberry");
print_r( $stack);

//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("color" => "green", "a", "b");
$result = array_merge($array1, $array2);
print_r( $result);

//time()
$nextWeek = time() + (7 * 24 * 60 * 60 );

echo time()."\n";
echo $nextWeek."\n";
echo date("Y-m-d", $nextWeek). "\n";

//mktime()
$time = mktime( 17, 17, 17, 9, 1, 2021);

echo date("Y-m-d/G:i:s", $time)."\n";

//date
date_default_timezone_set ('Asia/Tokyo');
echo date("L/Y-n-j-l/A:H:i:s")."\n";
?>

