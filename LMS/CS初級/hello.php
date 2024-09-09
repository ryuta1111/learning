<?php
// PHP では // を使ってコメントを表します
// コメントアウトすると、その⾏がプログラムに影響を与えることはありません
// 例
// エディタに書かれている 2 ⾏コードをコメントアウトして、"Welcome to Re-Light-LMS" のみをコンソールに出⼒しましょう
echo "Welcome to Re-Light-LMS" . PHP_EOL;
//echo "Let's learn computer science" . PHP_EOL;
//echo "This educational app offers a curriculum to help you become a great engineer" .PHP_EOL;

?>

<?php
echo 1+1;
?>

<?php
//PHPでは文字列の連結では,.を使用します

 echo "1"."1";
 ?>
 
 <?php
 //phpのコンソール上では、trueは１、falseは空の文字列として表示されるので注意が必要です
 //PHP_EOLによって改行することができます
 echo true.PHP_EOL;

 echo false.PHP_EOL;

 //gettype()を使って、データ型を調べることができます

 echo gettype(true).PHP_EOL;

 echo gettype(false).PHP_EOL;

 ?>

 <?php

 //PHPでは先頭に0xをつけることによって、ソースコード上で16進数を直接扱うことができます
 echo 0xFF . PHP_EOL;
 echo 0x4D . PHP_EOL;
 echo 0xF5D7 . PHP_EOL;
 echo 0x11 . PHP_EOL;

 ?>

 <?php
 //コンピュータに文字と認識してもらうために、クオテーションを使用します
 //javaやC++では、文字にシングルクオテーション（’）、文字列にダブルクオテーション（”）を使って区別します
 //JavaScriptでは文字と文字列は同じ方とみなされ、どちらを使っても問題ありません

 echo"s".PHP_EOL;
 echo'あ'.PHP_EOL;

 ?>


<?php
//コンピュータに文字と認識してもらうために、クオテーションを使用します
//JavaやC++では。文字にシングルクオテーション（’）、文字列にダブルクオテーション（”）を使って区別します
//PHPでは文字と文字列はstr型と一括りにされています
echo "a".PHP_EOL;
echo "abcd".PHP_EOL;
echo "abcdef".PHP_EOL;

//データ型
echo gettype("a").PHP_EOL;
echo gettype('a').PHP_EOL;
echo gettype("abcdef").PHP_EOL;


?>

<?php
//phpでは一つの浮動小数点数型しか存在しません
//floatと呼ばれるときも、doubleと呼ばれるときもあります
echo 3.14.PHP_EOL;

//データ型を調べます
//gettype()ではdoubleと返されます
echo gettype(3.14).PHP_EOL;

//E表記を使うことも可能です
echo 1.23456E4.PHP_EOL;

//float型を超える数値は、infinite(無限)と評価されます
echo is_finite(1.23456E-400).PHP_EOL;

?>


<?php
//gettype()を使って、データ型を調べることができます
//echoを使って、データを出力します

//整数型
echo 10 .PHP_EOL;
echo gettype(10) .PHP_EOL;

//2進数
echo 0b1000 .PHP_EOL;

//16進数
echo 0x1F .PHP_EOL;

//浮動小数点型
echo 3.14 .PHP_EOL;
echo gettype(3.14) .PHP_EOL;

//E 表記
echo 2e+3 .PHP_EOL;
echo 1.23e-2 .PHP_EOL;

//PHPは文字型は存在しません
//文字列型
echo "a" .PHP_EOL;
echo "Hello World" .PHP_EOL;
echo gettype("a") .PHP_EOL;
echo gettype("Hello World") .PHP_EOL;
echo gettype("123") .PHP_EOL;
echo gettype("9") .PHP_EOL;

//ブーリアン型
//phpのコンソール上では、trueは１、falseは空の文字列として表示されるので注意が必要です
echo true .PHP_EOL;
echo gettype(true) .PHP_EOL;
echo gettype("false") .PHP_EOL;

?>


<?php
//int型
echo 232 .PHP_EOL;

//データ型を調べます
echo gettype(232) .PHP_EOL;

//phpではint型は、64ビットです
echo PHP_INT_MAX .PHP_EOL;

?>

<?php
//PHPでは１つの浮動小数点数型しか存在しません
//floatと呼ばれるときも。doubleと呼ばれるときもあります
echo 3.14 .PHP_EOL;

//データ型を調べます
//gettype()ではdoubleと返されます
echo gettype(3.14) .PHP_EOL;

//PHPのfloat型は64ビットです
//float型の最大値
echo PHP_FLOAT_MAX .PHP_EOL;

//float型の最小値
echo PHP_FLOAT_MIN .PHP_EOL;

?>


<?php
//足し算
echo 12+5 .PHP_EOL;
echo gettype(12+5) .PHP_EOL;

//PHPは、整数のように見える数値は整数として表示し、浮動小数点数のように見える数値は浮動小数点数として表示します
//データ型には注意しましょう
echo 12.0+5.0 .PHP_EOL;
echo gettype(12.0+5.0) .PHP_EOL;

//引き算
echo 12-5 .PHP_EOL;
echo 12.0-5.0 .PHP_EOL;

//掛け算
echo 12-5 .PHP_EOL;
echo 12.0*5.0 .PHP_EOL;

//割り算
echo 12/5 .PHP_EOL;
echo 12/3 .PHP_EOL;
echo gettype(12/3) .PHP_EOL;
echo 12.0/5.0 .PHP_EOL;

//有効数字14桁で15桁目が以降を丸めた数になります
echo 1/300000000 .PHP_EOL;

//数値を0で割ると、エラーが発生します
//Warninng;Division by zeroというエラーメッセージが表示されます
//0で割った時は、言語によって仕様が異なります
//echo 1/0 .PHP_EOL;

//練習問題1
//14.0/2.0の結果を予測して、コンソールうに出力してみましょう
echo 14.0/2.0 .PHP_EOL;

//練習問題2
//14.0/2.0のデータ型を予測して、コンソールに出力してみましょう
echo gettype(14.0/2.0) .PHP_EOL;

?>

<?php
//足し算
echo 2.0+5 .PHP_EOL;
echo gettype(2.0+5).PHP_EOL;

//引き算
echo 2.0-5 .PHP_EOL;

//掛け算
echo 2.0*5 .PHP_EOL;

//割り算
echo 2/5 .PHP_EOL;
echo 2.0/5 .PHP_EOL;
echo 2/5.0 .PHP_EOL;
echo 2.0/5.0 .PHP_EOL;

?>

<?php
echo 3*2+1 .PHP_EOL;
echo 3+10/2*5 .PHP_EOL;

//2-81/3/3*3*3+8の結果を予想してみましょう
//出力して確認してみましょう。次の項にて計算方法は詳しく学習します。
echo 2-81/3/3*3*3+8 .PHP_EOL;

?>

<?php
echo 2+4-5 .PHP_EOL;
echo 10-2*5 .PHP_EOL;

echo 14+10/5*4-1 .PHP_EOL;
echo gettype(14+10/5*4-1) .PHP_EOL;

?>

<?php
//剰余(％)演算子
//33を5で割った時の余は3
echo 33%5 .PHP_EOL;

//10を2で割った時の余は　0
echo 10%2 .PHP_EOL;

//%と*と/は全て同じ優先順位です
echo 21%2*8 .PHP_EOL;

//-よりも％が先に計算されます
echo 21-2%2 .PHP_EOL;

//べき乗（**）演算子
//81=3^4
echo 3**4 .PHP_EOL;

//256=2^8
echo 2**8 .PHP_EOL;

//1=2^0
echo 2**0 .PHP_EOL;

//*より**の方が優先順位が高いため、3**2が先に評価され9を返します
echo 2*3**2 .PHP_EOL;

//2**2が評価され、4を返します。4**2は16を返します
echo 2**2**2 .PHP_EOL;

//比較演算子
//PHPのコンソール上では、trueは１、falseはからの文字鉄として表示されるため、注意が必要です
//三項演算子を用いて、文字列のtrue,falseを出力します

//等価（==）演算子
echo (3==3?"true":"false") .PHP_EOL;
echo (3==2?"true":"false") .PHP_EOL;

//不等価(!=)演算子
echo (3!=3?"true":"false") .PHP_EOL;
echo (3!=2?"true":"false") .PHP_EOL;

//大なり（>）演算子
echo (3>2?"true":"false") .PHP_EOL;
echo (3>2?"true":"false") .PHP_EOL;

//小なり（<）演算子
echo (3<2?"true":"false") .PHP_EOL;
echo (2<3?"true":"false") .PHP_EOL;

//練習問題1
//7%3の結果を予想して、コンソールに出力してみましょう
echo 7%3 .PHP_EOL;

//練習問題2
//15-8%1の結果を予想して、コンソールに出力してみましょう
echo 15-8%1 .PHP_EOL;

//練習問題3
//74>23の結果を予想して、コンソールに出力してみましょう
echo (74>23?"true":"false") .PHP_EOL;

//練習問題4
//2==2の結果を予想して、コンソールに出力してみましょう
echo (2==2?"true":"false") .PHP_EOL;

?>

<?php
//PHPは文字データ型を持っていないため、すべての文字が文字列データ型になります
//また、シングルクオテーション（’）もダブルクオテーション（”）どちらも使うことができます
echo 'w' .PHP_EOL;
echo "w" .PHP_EOL;

//gettypeを使ってデータ型を調べ、出力します
echo gettype('w') .PHP_EOL;
echo gettype("w") .PHP_EOL;

?>

<?php
//インデックス０を指定したため、先頭の　aが取得できます
echo "abcde"[0] .PHP_EOL;

//インデックス２を指定したため、cが取得できます
echo "abcde"[2] .PHP_EOL;

//インデックス４を指定したため、eが取得できます

?>

<?php
//PHPでは、文字列の連結には．を用います
//str型＋str型
echo "Hello"."World" .PHP_EOL;
echo "Hello".''."World" .PHP_EOL;
echo "S".''."J" .PHP_EOL;

//さらにPHPでは、int型．str型．＝str型になります
//連結演算子の場合、phpはint型とfloat型を勝手にstr型に変更します
echo "The year is:". 2000 .PHP_EOL;

//float型．str型＝str型
echo "Left;". 20.343."km" .PHP_EOL;

//練習問題1
//23+24の結果をコンソールに出力してみましょう
echo 23+24 .PHP_EOL;

//練習問題２
//文字列23と文字列24を連結して、コンソールに出力してみましょう
echo "23"."24" .PHP_EOL;

//練習問題3
//abcdとefghを連結して、コンソールに出力してみましょう
echo "abc"."efgh" .PHP_EOL;

//練習問題4
//連結を使って、自分のイニシャル（例S.T）をコンソールに出力してみましょう
echo "K".'.'."R" .PHP_EOL;

//練習問題5
//連結を使って、abcの文字の間にハイフンを入れて、コンソールに出力してみましょう
echo "a".'-'."b".'-'."c" .PHP_EOL;


?>

<?php
//phpの変数はドル記号の後に変数名が続く形式で表せれます
//宣言と代入を同時に行います
$letter="a";
$height=175;

//phpでは、定数の宣言にconstというキーワードを使います
//定数は開発者が理解しやすいように、慣習的に大文字を使用します
//定数の先頭にはドル記号はつけません
const MY_NUMBER = 41984980;

//変数nに代入されたデータは、プログラムで利用することができます
echo $letter .PHP_EOL;
echo $height .PHP_EOL;
echo MY_NUMBER .PHP_EOL;

//代入によって異なる値を関連づけることができます
//phpは動的に型付け言語なので、異なるデータ型でも代入することができます
$letter="c";
$height=190;
echo $letter .PHP_EOL;
echo $height .PHP_EOL;

$height="高さ";
echo $height .PHP_EOL;

//定数に再代入はできません。エラーが発生します
//Parse error:syntax error,unexpected'='
//MY_NUMBER=68434782;

?>

<?php
//変数　incomingAnimalsの宣言をして、データを代入します
$incomingAnimals=15;

//新しい変数　animalsinShelterの宣言をして、データを代入します
//この時、incomingAnimalsにはすでに15が代入されているので、10+15が実行され25を返し、変数に代入されます
$animalsInShelter=10+$incomingAnimals;

//データの出力
echo $animalsInShelter .PHP_EOL;

//例題
//変数onlineOrderを宣言して、3を代入してください
//新しい変数orderCountを宣言して、onlineOrderに５を足して、その結果を代入してください
//onlineOrder をコンソールに出力してください
$onlineOrder=3;
$orderCount=5+$onlineOrder;
echo $onlineOrder .PHP_EOL;

?>

<?php
//変数onlineUserの宣言
$onlineUser=30;

//新しい変数onlinePaidUserの宣言
$onlinePaidUser=3;

//onlineUserに各データを変数を使って代入
$onlineUser=$onlineUser+$onlinePaidUser;

//onlineUserを出力
echo $onlineUser.PHP_EOL;

//例題１
//変数 appleCountを宣言して、5を代入してください
//変数　thisMonthHarvestを宣言して、4を代入してください
//appleCountにthisMonthHarvestを足して、変数appleCountの値を更新してください
//appleCountをコンソールに出力してください
$appleCount=5;
$thisMonthHarvest=4;
$appleCount=$appleCount+$thisMonthHarvest;
echo $appleCount .PHP_EOL;

//例題2
//変数　animalsInShelterを宣言し、10を代入してください
//新しい変数 incomingAnimalsを宣言し、数値15を代入してください
//animalsInShelterにincomingAnimalsを足して、変数animalsInShelterを値を更新してください
//animalsInShelterをコンソールに出力してください
$animalsInShelter=10;
$incomingAnimals=15;
$animalsInShelter=$animalsInShelter+$incomingAnimals;
echo $animalsInShelter .PHP_EOL;

?>

<?php
//変数　onlineUserの宣言
$onlineUser=30;

//新しい変数　onlinePaidUserの宣言
$onlinePaidUser=3;

// onlineUserに各データを変数を使って代入
$onlineUser+=$onlinePaidUser;

// onlineUserを出力
echo $onlineUser .PHP_EOL;
?>

<?php
//phpでは、関数を示すためfunctionというキーワードを使用します
//phpは、動的型付け言語なので入出力のデータ型を示す必要はありません
function triangleArea($width,$height){
    return $width*$height/2;
}

//プログラム内で関数が定義されている場合、プログラム内で何度も呼び出すことができます
//10
echo triangleArea(5,4) .PHP_EOL;

//17
//出力された値を演算子と組み合わせることも可能です
echo triangleArea(5,4)+7 .PHP_EOL;

//250
echo triangleArea(100,5) .PHP_EOL;

//60
echo triangleArea(10,12) .PHP_EOL;

//7.5
echo triangleArea(3,5) .PHP_EOL;

?>

<?php
function hotelAccommodationFee($price,$day){
    //1日分の清掃費
    $CLEANING_FEE=20;

    //1日分の清掃費
    $FOOD_BILL=30;

    //税率10％
    $TAX_RATE=0.1;

    //滞在費合計(税引き)
    $TOTAL=$day*($price+$CLEANING_FEE+$FOOD_BILL);

    //税込
    return $TOTAL*(1+$TAX_RATE);
}

echo hotelAccommodationFee(80,5) .PHP_EOL;
echo hotelAccommodationFee(100,1) .PHP_EOL;
echo hotelAccommodationFee(25,5) .PHP_EOL;
?>
