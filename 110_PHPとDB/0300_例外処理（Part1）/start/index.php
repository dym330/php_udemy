<?php
/**
 * 例外処理とは
 */
// $user = 'test_user';
// $pwd = 'pwd';
// $host = 'localhost';
// $dbName = 'test_phpdb';
// $dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
// $conn = new PDO($dsn, $user, $pwd);

// $pst = $conn->query('select * from test_phpdb.mst_shops');
// $result = $pst->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($result);
// echo '</pre>';

// $conn = null;

try {
  // new PDO("","","");
  $bool = false;
  // $bool->method();

  echo '通常処理が実行されました<br>';
} catch(PDOException $e) {
  echo 'PDO例外処理が実行されました<br>';
  echo $e->getMessage();
} catch(Error $e) {
  echo '例外処理が実行されました<br>';
  echo $e->getMessage();
} finally {
  echo '終了処理が実行されました<br>';
}