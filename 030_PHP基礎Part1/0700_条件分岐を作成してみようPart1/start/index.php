<?php 

$score = 80;
$kesseki = 4;
if ($score < 50 || $kesseki >= 5) {
  echo '不合格';
} elseif ($score < 70 && $score >= 50) {
  echo '合格';
} else {
  echo '秀';
}