<?php

$array = [
  ['table', 1000],
  ['chair', 100],
  ['chair', 100],
  ['chair', 100],
  ['bed', 10000],
];

// $array[1][1] = 500;

// 一番最初を削除
// array_shift($array);

// 一番最後を削除
// array_pop($array);

// 特定の配列を削除　第３引数削除で第２から最後までを表す
array_splice($array, 1, 2);

foreach ($array as $val) {
  echo "{$val[0]}は{$val[1]}円です";
}