<?php
session_start();
$id = $_GET["id"]; //?id~**を受け取る
require_once("funcs.php");
loginCheck();
$pdo = db_conn();
//返信機能

$stmt = $pdo->prepare("SELECT * FROM gs_posting_table WHERE id=:id");

$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error();
}else{
    $row = $stmt->fetch();
}


//     //入力内容
// $name   = $_POST["name"];
// $email  = $_POST["email"];
// $naiyou = $_POST["naiyou"];
 
//     //ここでバリデーション処理

// $stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES(:name,:email,:naiyou,sysdate())");
// $stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $status = $stmt->execute(); //実行
    
//     //返信投稿処理
 

// //処理したらページに戻す
// if($status==false){
//     sql_error();
//     }else{
//     redirect("index.php");
//     }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="posting2.php">
  <div class="jumbotron">
   <fieldset>
    <legend>[返信]</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label><textArea name="text" rows="4" cols="40"><?=$row["text"]?></textArea></label><br>

     <input type="submit" value="送信">
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
