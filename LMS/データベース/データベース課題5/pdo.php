<?php

//準備
$db_user='root';
$db_pass='passwd';
$dsn='mysql:dbname=cafe;host=127.0.0.1;charset=utf8;port=3306';

//タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');




try{
    //接続
    $pdo=new PDO($dsn,$db_user,$db_pass);//PDOでmysqlのデータベースに接続
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);


}catch(PDOException $e){
    echo 'DB接続エラー!:' .$e->getMessage();
    die();
}
return $dbo;


?>




