<?php

$arry = [
  // 'key' => 10,
];

// if(isset($arry['key'])) {
//   $arry['key'] *= 10;
// } else {
//   $arry['key'] = 1;
// }

// null合体演算子
$arry['key'] = $arry['key'] ?? 1;

// 三項演算子
// $arry['key'] = isset($arry['key']) ? $arry['key'] *= 10: $arry['key'] = 1;

echo $arry['key'];