<?php
session_start();

require_once("funcs.php");
loginCheck();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$stmt1 = $pdo->prepare("SELECT * FROM gs_posting_table");

$status = $stmt->execute();
$status = $stmt1->execute();

//３．データ表示
$view="";
$view1="";
//table
echo '<table border="1"  width="80%" align="center" valign="middle" text-align="center" class=table1>
      <tr>
      <th>編集</th>
      <th>記入日</th>
      <th>題名</th>
      <th>Tag</th>
      <th>コメント</th>
      <th>返信</th>
      <th>削除</th>
      </tr>';


//
if($status==false) {
  sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC) or $r1 = $stmt1->fetch(PDO::FETCH_ASSOC) ){ 
    $view .= '<p>';
    //
    $view .= "<table>";
    echo '<tr class =table1>';
    // echo '<td>'.$r['id'].'</td>';
    // echo '<td>'.$r['id'].'に対する返信</td>';

    echo '<td>'.'<a href="detail.php?id='.$r["id"].'">更新</td>';
    echo '<td>'.$r['indate'].'</td>';
    echo '<td>'.$r['name'].'</td>';
    echo '<td>'.$r['email'].'</td>';
    //posting
    echo '<td>'.$r1['text'].'</td>';

    echo '<td>'.'<a href="posting.php?id='.$r["id"].'">返信</td>';
//posting
    //
    // $view .= '<a href="detail.php?id='.$r["id"].'">';
    // $view .= $r["id"]."|".$r["name"]."|".$r["email"];
    // $view .= '</a>';
    // $view .= "　";
    if($_SESSION["kanri_flg"]=="1"){
      // $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      // $view .= '[<i class="glyphicon glyphicon-remove"></i>削除]';
      // $view .= '</a>';
      echo '<td>'.'<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">'.'削除</td>'; 
      // echo '<td>'.'[<i class="glyphicon glyphicon-remove"></i>削除]'.'</td>';
    }
    $view .= '</p>';
  }
}




?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron" id="view"><?=$view?></div>

  </div>
<!-- Main[End] -->
<script>





</script>
</body>
</html>
