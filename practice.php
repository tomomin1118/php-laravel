<?php
echo 'hello php!';

//1
$a = 3;
$b = 7;

echo  $a + $b;

//2
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];

//3
$hello = "Hello";
$name = "関谷";
$world = "'s World!" ;

echo $hello . $name . $world;

//4
$tech_boost = "tech";
$tech_boost .= " boost";

echo $tech_boost;

//5
$calendar_2018 = [  //数字が先頭の変数は使用不可の為変更。｛ を [ に修正。
    "January" => "1月",
    "February" => "2月", // 、を,に修正。
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" => "6月",
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月", // ダブルクォーテーション追加。
    "November" => "11月",
    "December" => "12月"
]; // } を ] に修正

echo $calendar_2018["December"]; // キーにダブルクォーテーション追加。



