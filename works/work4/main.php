<?php
// 外部ファイルの読み込み
require "function.php";

//TODO: ここから下で各関数を実行
print_r(readBooksData());
calcTax($books);
print_r($books);
