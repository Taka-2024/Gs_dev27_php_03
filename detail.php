<?php
session_start();
$ID = $_GET["ID"]; //?id~**を受け取る
include("funcs.php");
sschk();
$pdo = db_conn();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE ID=:ID");
$stmt->bindValue(":ID", $ID, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if($status==false) {
    sql_error($stmt);
}else{
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/select.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>


<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <?=$_SESSION["lid"]?>さん、こんにちは！
        <a class="navbar-brand" href="index.php">トップページへ</a>
        <a class="navbar-brand" href="signin-form.php">データ登録</a><var>
        <a class="navbar-brand" href="logout_act.php">ログアウト</a></var>
      </div>
    </div>
  </nav>
</header>

<div class="container">
  <div class="jumbotron">
    <h2>データ更新</h2>
    <form method="POST" action="update.php">
      <fieldset>
        <legend>[編集]</legend>
        <div class="form-group">
          <label for="lid">ID：</label>
          <input type="text" id="lid" name="lid" class="form-control" value="<?=htmlspecialchars($row["lid"], ENT_QUOTES, 'UTF-8')?>">
        </div>
        <div class="form-group">
          <label for="lpw">Password：</label>
          <input type="password" id="lpw" name="lpw" class="form-control" value="<?=htmlspecialchars($row["lpw"], ENT_QUOTES, 'UTF-8')?>">
        </div>
        <div class="form-group">
          <label for="kanri_flg">管理者フラグ：</label>
          <input type="text" id="kanri_flg" name="kanri_flg" class="form-control" value="<?=htmlspecialchars($row["kanri_flg"], ENT_QUOTES, 'UTF-8')?>">
        </div>
        <div class="form-group">
          <label for="life_flg">アカウント生存フラグ：</label>
          <input type="text" id="life_flg" name="life_flg" class="form-control" value="<?=htmlspecialchars($row["life_flg"], ENT_QUOTES, 'UTF-8')?>">
        </div>
        <input type="hidden" name="ID" value="<?=htmlspecialchars($ID, ENT_QUOTES, 'UTF-8')?>">
        <button type="submit" class="btn btn-primary">送信</button>
      </fieldset>
    </form>
  </div>
</div>

</body>
</html>