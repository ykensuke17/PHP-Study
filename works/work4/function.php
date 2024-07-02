<?php
// 関数1
function readBooksData()
{
    $filename = './books.csv';

    // CSVファイルを開く
    if (($file = fopen($filename, 'r')) !== FALSE) {
        // ヘッダーを読み込む
        $header = fgetcsv($file, 1000, ',');

        $books = array();

        // 行ごとに読み込んで連想配列に変換
        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            $book = array();
            // TODO:ここでループを使ってデータを連想配列に変換
            $books[] = $book;
        }

        fclose($file);

        // 結果を返却
        return $books;
    } else {
        echo "ファイルを開けませんでした。";
    }
}

// 関数2
function calcTax($books)
{
}

// 関数3
function findBooks($books, $str)
{
}

// データを表示する関数
function displayBooks($books)
{
    foreach ($books as $book) {
        echo "タイトル: " . $book["タイトル"] . "\n";
        echo "著者: " . $book["著者"] . "\n";
        echo "値段: " . $book["値段"] . "円\n";
        echo "------------------\n";
    }
}
