<?php
// エラー表示を有効にする（デバッグ時のみ）
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 必ずsession_startは最初に記述
session_start();

// SESSIONを初期化（空っぽにする）
$_SESSION = array();

// Cookieに保存してある"SessionIDの保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/', '', true, true);
}

// サーバ側での、セッションIDの破棄
session_destroy();

// 完全なURLでリダイレクト（例：http://yourdomain.com/index.php）
header("Location: index.php");
// $redirect_url ='http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
// header("Location: " . $redirect_url);
exit();
?>