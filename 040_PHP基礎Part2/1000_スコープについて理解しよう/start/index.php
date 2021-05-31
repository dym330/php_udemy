<?php

$a = 0; // グローバルスコープ

function fn1() {
  $b = 1; //ローカルスコープ
}
function fn2() {
  global $a; //グローバル変数の使用方法
  // var_dump($_SERVER); // スーパーグローバル
  if (true) {
    $b = 2;
  }
  // $b = 2;
  echo $b;
}

fn2();