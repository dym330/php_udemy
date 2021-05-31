<?php
$array = ['taro', 'hanako', 'jiro'];
print_r($array);
var_dump($array);
echo $array[1];
$array[1] = 'sachiko';
echo $array[1];
$array[] = 'saburo';
print_r($array);
echo '<br>';

for ($i = 0; $i < count($array); $i++) {
  echo '<div>', $array[$i],'</div>';
}

foreach ($array as $i => $v) {
  echo '<div>', $i, $v,'</div>';
}


