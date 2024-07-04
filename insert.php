<?php
session_start();

//1. POSTデータ取得
$lid =$_POST['lid'];
$lpw =$_POST['lpw'];

//2. DB接続
  //funcs.phpに記載
  include("funcs.php");
  $pdo = db_conn();

//3．データ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO 
              gs_user_table (ID, lid, lpw) 
              VALUES         (NULL, :lid, :lpw) ');

  //パスワードのハッシュ化
$hashed_password = password_hash($lpw, PASSWORD_DEFAULT);

//  4. バインド変数を用意
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $hashed_password, PDO::PARAM_STR);

//  5. 実行
$status = $stmt->execute();

//6．データ登録処理後
if(!$status){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  $_SESSION['lid'] = $lid;
  header('Location: user-index.php');
}
