<?php
//変数 num が負の数であれば「負の数です」、0であれば「ゼロです」、
//正の数であれば「正の数です」と表示するコードを書いてください。
$num = 0;

// TODO: ここにコードを追記
echo $num;
echo "\n";

if ($num < 0) {
    echo "負の数です\n";
}

if ($num == 0) {
    echo "ゼロです\n";
}


if ($num > 0) {
    echo "正の数です\n";
}

if ($num < 0) {
    echo "負の数です\n";
} elseif ($num == 0) {
    echo "ゼロです\n";
} else {
    echo "正の数です\n";
}
