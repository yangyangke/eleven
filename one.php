<?php
//水仙花数
//function cheng($n){
//    $n*$n*$n;
//}
//function flower($n){
//    $num = floor($n/100);
//    $num1 = floor($n/10)%10;
//    $num2 = floor($n%10);
//    if($n = cheng($num)+cheng($num1)+cheng($num2)) return $n;
//}
//function xun($m,$n){
//    $array = [];
//    for($i=$m;$i<$n;$i++){
//        $is = flower($i);
//        if($is) $array[] = $is;
//    }
//    return $array;
//}
//$arr = xun(100,999);
//print_r($arr);die;
//杨辉三角
$num = 10;
$array = [];
for($i=1;$i<$num;$i++){
    echo "<tr>";
    for($j=1;$j<$i;$j++){
        if($j==1||$i==$j){
            echo $array[$i][$j]==1;
        }else{
            echo "  ";
            echo $array[$i][$j] = $array[$i-1][$j]+$array[$i-1][$j-1];
            echo "<br/>";
        }
    }
    echo "<tr/>";
}
echo $array;
die;
//九九乘法表
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=$i;$j++){
        $sum = $i*$j;
        echo "$i*$j=$sum";
        echo "\n";
    }
    echo "<tr/>";
}
