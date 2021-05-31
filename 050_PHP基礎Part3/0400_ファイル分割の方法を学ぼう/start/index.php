<?php
/**
 * ファイル分割の方法を学ぼう
 * 
 * - require、includeの違い
 * - require、require_onceの使い方
 * 
 * require 読み込めない場合そこで処理が止まる...関数ファイルなど
 * include 読み込めない場合でも処理は実行...htmlテンプレなど
 */
$arry = [
    'num' => 0
];

include('file.php');
// require_once('file1.php');
// require_once('file1.php');
// require_once('file2.php');
// require_once('file2.php');
// require_once('file2.php');

// fn1();
echo $arry['num'];