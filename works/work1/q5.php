<?php
//変数 num が3の倍数であれば「3の倍数です」、
//そうでなければ「3の倍数ではありません」と表示するコードを書いてください。
$num = 66;

// TODO: ここにコードを追記
echo $num;
echo "\n";

$var1 = $num % 3;

if ($var1 == 0) {
    echo "3の倍数です\n";
} elseif ($var1 > 0 || $var1 < 0) {
    echo "3の倍数ではありません\n";
}
