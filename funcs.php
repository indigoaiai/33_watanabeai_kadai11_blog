<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
  
  // $db="mil16_gs_dbwatanabe"; //DB名変更はここを！

  try {
    $db_name = "mil16_gs_dbwatanabe";    //データベース名
    $db_id   = "mil16";      //アカウント名
    $db_pw   = "GONgon6015";      //パスワード：XAMPPはパスワード無しに修正してください。
    $db_host = "mysql57.mil16.sakura.ne.jp"; //DBホスト

    //MAMP
    // return new PDO('mysql:dbname='.$db.';charset=utf8;host=localhost','root','root');
    return new PDO('mysql:dbname='.$db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);

    //XAMP
    //return new PDO('mysql:dbname='.$db.';charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DB Connection Error:'.$e->getMessage());
  }
}

//SQLエラー
function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

//リダイレクト
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}
//SessionCheck
function loginCheck(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
  }else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
  }
}