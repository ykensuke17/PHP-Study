<?php
//変数 num が0より大きければ「正の数です」、0であれば「ゼロです」、
//0より小さければ「負の数です」と表示するコードを書いてください。
$num = 0;

// TODO: ここにコードを追記
echo $num;
echo "\n";

if ($num > 0) {
    echo "正の数です\n";
} elseif ($num == 0) {
    echo "ゼロです\n";
} else {
    echo "負の数です\n";
}
