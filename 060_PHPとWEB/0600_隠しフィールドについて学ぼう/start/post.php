<?php 
$num = $_POST['num'];
$price = $_POST['price'];
$discount = $_POST['discount'];

$sum = $num * $price;
$sum -= $sum * $discount / 100;
echo '合計：', round($sum), '円';

if ($_POST['admin']) {
  echo 'ハッキング';
} else {
  echo '問題なし';
}

?>