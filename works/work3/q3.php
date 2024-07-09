<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$values = array(1, 2, 3, 4, 5, 6, 7);
$result = average($values);
echo "平均値: " . $result . "\n";


function average($values)
{
    $total = 0;
    for ($i = 0; $i < count($values); $i++) {
        $total = $total + $values[$i];
    }
    $resurt = $total / $i;
    return $resurt;
}
