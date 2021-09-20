<?php
//1
$name = "Sekiya";

if ($name == "Sekiya") {
    echo "私は　" . $name .= "　です";
} else {
    echo "Sekiyaではありません";
}

//2
$i = 0;
$total= 0;

for ( $i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

//3
$fruits = ["ichigo","momo","budou","nashi","pain"];

foreach ( $fruits as $fruits){
    echo $fruits;
}

//4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){ //$end前の演算子<を<=にする
    if($i % 5 == 0){
        echo $i;
    }
}

