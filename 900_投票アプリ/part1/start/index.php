<?php 
require_once 'config.php';

require_once SOURCE_BASE . 'partials/header.php';

// str_replace(1,2,3) 3から1の文字列を探して2に置換する
$rpath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
// メソッドの取得　strtolower():小文字に変換
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

function route($rpath, $method) {
  if($rpath === '') {
    $rpath = 'home';
  }

  $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

  // ファイルが存在しないとき404に飛ばす
  if (!file_exists($targetFile)) {
    require_once SOURCE_BASE . "views/404.php";
    return;
  }

  require_once $targetFile;

  $fn = "\\controller\\{$rpath}\\{$method}";
  $fn();
}

// if ($_SERVER['REQUEST_URI'] === '/poll/part1/start/login') {
//   require_once SOURCE_BASE . 'controllers/login.php';
// } else if ($_SERVER['REQUEST_URI'] === '/poll/part1/start/register') {
//   require_once SOURCE_BASE . 'controllers/register.php';
// } else if ($_SERVER['REQUEST_URI'] === '/poll/part1/start/home') {
//   require_once SOURCE_BASE . 'controllers/home.php';
// }

require_once SOURCE_BASE . 'partials/footer.php';
?>
