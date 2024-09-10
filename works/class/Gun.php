<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;
    // 拡張装弾数
    private $extendedMagazine;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($name, $maxMagazine)
    {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->extendedMagazine = 0;
        $this->currentMagazine = 0;
    }
    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . " + " . $this->extendedMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function relaod()
    {
        // 問題2
        if ($this->currentMagazine == $this->maxMagazine + $this->extendedMagazine) {
            echo "リロードの必要はありません\n";
            return;
        } else {
            $this->currentMagazine = $this->maxMagazine + $this->extendedMagazine;
        }
    }

    // 発砲
    function fire()
    {
        // 問題3
        if ($this->currentMagazine == 0) {
            echo "リロードしてください。\n";
            return;
        } else {
            $this->currentMagazine = $this->currentMagazine - 1;
            echo "$this->name を発砲しました。残弾： $this->currentMagazine 発 \n";
            if ($this->currentMagazine == 0) {
                echo "リロードしてください。\n";
            }
        }
    }

    // 拡張マガジンを装着
    function setExtendedMagazine($x)
    {
        // 問題4
        if ($x <= 0) {
            echo "引数が不正です\n";
            return;
        } else {
            $this->extendedMagazine = $x;
        }
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        // 問題4
        if ($this->extendedMagazine = 0) {
            echo "拡張マガジンは装着されていません\n";
            return;
        }
        $this->extendedMagazine = 0;
        if ($this->currentMagazine > $this->maxMagazine + $this->extendedMagazine) {
            $this->currentMagazine = $this->maxMagazine + $this->extendedMagazine;
        }
    }
}
