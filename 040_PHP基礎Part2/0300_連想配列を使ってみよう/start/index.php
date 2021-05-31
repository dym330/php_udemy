<?php

$array = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];

$array['age'] += 24;

// 特定のキーを削除
unset($array['name']);

// echo $array['name'];
echo $array['age'];
echo $array['sports'][1];
