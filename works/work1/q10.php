<?php
//変数 num が負の数であれば「負の数です」、正の数であれば「正の数です」、
//0であれば「ゼロです」と表示するコードを書いてください。
//ただし、0の場合に「ゼロです」と表示する条件を最初に確認するようにしてください。
$num = -3;

// TODO: ここにコードを追記
echo $num;
echo "\n";

if ($num == 0) {
    echo "ゼロです\n";
} elseif ($num < 0) {
    echo "負の数です\n";
} else {
    echo "正の数です\n";
}
