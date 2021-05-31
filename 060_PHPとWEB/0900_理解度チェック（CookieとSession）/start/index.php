<?php
/**
 * SessionとCookieの理解度チェック
 * 
 * index.phpに訪問するたびに訪問回数が
 * １ずつ増える処理を実装してみてください。
 * Session、Cookieの二つのパターンで実装してみましょう。
 * 
 * １回目
 * 訪問回数は 1 回目です。
 * 
 * ２回目
 * 訪問回数は 2 回目です。
 * 
 */

 
// Sessionを使った場合

session_start();
$_SESSION['VISIT_COUNT'] = $_SESSION['VISIT_COUNT'] ?? 0;
$_SESSION['VISIT_COUNT']++;
echo "<div>訪問回数は{$_SESSION['VISIT_COUNT']}回目です。</div>";
// Cookieを使った場合

$visit_cookie = $_COOKIE['VISIT_COUNT'] ?? 0;
$visit_cookie++;
setcookie('VISIT_COUNT', $visit_cookie);
echo "<div>訪問回数は{$visit_cookie}回目です。</div>";
