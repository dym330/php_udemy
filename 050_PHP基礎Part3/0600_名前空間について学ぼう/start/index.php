<?php
require_once './lib.php';

// if(!defined('TAX_RATE')) {
//     define('TAX_RATE', 0.1);
// }

use function lib\with_tax;
use const lib\TAX_RATE;
$price = with_tax(1000, 0.08);
echo $price;
echo TAX_RATE;