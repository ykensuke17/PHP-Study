<?php
// 外部ファイルの読み込み
require "function.php";

//TODO: ここから下で各関数を実行

$books = readBooksData();

$books = calcTax($books);
print_r($books);
