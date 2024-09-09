<?php
$url="localhost";
$user="root";
$pass="passpass";
$db="test_db";

//Mysqlサーバへ接続
$link=mysqli_connect($url,$user,$pass);

//接続情報を取得し$link_infoに格納
$link_info=mysqli_get_host_info($link);

//データベースを選択
mysqli_select_db($link,$db);

//Mysqlへの接続を閉じる
mysqli_close($link);
?>


