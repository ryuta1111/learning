<?php
//クラス構造を利用して、名前空間として使うことができます
//クラスでは変数や関数を保存することができます

//public staticとは、次のような意味を持ちます。
//public-どんなクラスでも使用可能
//static-インスタンスがなくても使用可能

class Circle{
    //クラス内ではデータはメンバ変数と呼ばれます
    //メンバ変数の定義
    //定義の際、変数に＄はつきません
    public const PI =3.14;

    //クラス内では関数はメソッドと呼ばれます
    //メソッドの定義
    public static function perimeter($radius){
        //円周は2πr
        //メンバ変数を::でアクセスします
        return 2*Circle::PI*$radius;
    }

    public static function area($radius){
        //円の面積はπr^2
        return Circle::PI*$radius*$radius;
    }
}

class Square{
    public static function perimeter($side){
        //正方形の周囲の長さは４×１辺
        return 4*$side;
    }
    
    public static function area($side){
        //正方形の面積は（１辺）^2
        return $side*$side;
    }
}

class EquilateralTriangle{
    public static function perimeter($side){
        //正三角形の周囲の長さは３×１辺
        return 3*$side;
    }

    public static function area($side){
        //正三角形の面積は√3/4 ×（１辺）^2
        //√xはx^0.5なので、べき乗（**）演算子を使って求めることができます
        return(3**0.5/4)*$side*$side;
    }
}

//クラス（名前空間）の中にある関数にアクセスします
echo Circle::perimeter(4) .PHP_EOL;
echo Circle::area(4) .PHP_EOL;

echo Square::perimeter(4) .PHP_EOL;
echo Square::area(4) .PHP_EOL;

echo EquilateralTriangle::perimeter(4) .PHP_EOL;
echo EquilateralTriangle::area(4) .PHP_EOL;

//クラス（名前空間）の中にあるメンバ変数にアクセスします
echo Circle::PI .PHP_EOL;
?>

<?php
class PhysicsThings{
    //メンバ変数
    public const GRAVITYONEARTH=9.8;
    public const GRAVITYONMOON=1.62;

    //メソッド
    public static function newtonOnEarth($weight){
        //質量×重力で、重さを計算できます。
        //地球上での重さ
        return $weight * PhysicsThings::GRAVITYONEARTH;
    }
    //メソッド
    public static function newtonOnMoon($weight){
        return $weight * PhysicsThings::GRAVITYONMOON;
    }
}

//名前空間内の関数にアクセス
echo PhysicsThings::newtonOnEarth(80) .PHP_EOL;
echo PhysicsThings::newtonOnMoon(80) .PHP_EOL;
?>

<?php
class MathThings{
    //数値を受け取り、加算を実行
    public static function add($x,$y){
        return $x+$y;
    }
}

//文字列を受け取り、連結を実行する
function add($s1,$s2){
    return $s1 . $s2;
}

//名前空間のおかげで名前が衝突せずに済みます
echo MathThings::add(5,4) .PHP_EOL;
echo add("hello","world") .PHP_EOL;
?>

<?php
//以下の　PhysicsThingsの名前空間を作成しましょう
//重力加速度を9.8としてください
//物体の質量を受け取り、重力を返すメソッドを作成してください
//物体の質量と高さを受け取り、位置エネルギー（質量＊高さ＊重力加速度）を返すメソッドを作成してください
//物体の質力と速さを受け取り、運動エネルギー（質量＊速さ^2/2）を返すメソッドを作成してください
//質量・高さ・早さはint型とします

//以下のデータを出力してください
//PhysicsThings.GRAVITY-9.8
//PhisicsThings.getWeight(80)-784
//PhisicsThings.potentialEnergy(80,4)-3136
//PhisicsThings.kineticEnergy(80,4)-4000

class PhysicsThing{
    public const GRAVITYONEARTH=9.8;

    public static function getWeight($weight){
        return $weight*PhysicsThing::GRAVITYONEARTH;
    }

    public static function potentialEnergy($weight,$height){
        return $weight*$height*PhysicsThing::GRAVITYONEARTH;
    }
    public static function kineticEnergy($weight,$speed){
        return $weight*$speed^2/2;
    }
}
echo PhysicsThing::getWeight(80) .PHP_EOL;
echo PhysicsThing::potentialEnergy(80,4) .PHP_EOL;
echo PhysicsThing::kineticEnergy(80,10) .PHP_EOL;
?>


<?php
echo(4==5?"True":"False") .PHP_EOL;
echo(4!=5?"True":"False") .PHP_EOL;
echo(21>10?"True":"False") .PHP_EOL;
echo(19<54?"True":"False") .PHP_EOL;
echo(21>=21?"True":"False") .PHP_EOL;
echo(34<=23?"True":"False") .PHP_EOL;

echo("Hello"!="Hello"?"True":"False") .PHP_EOL;
echo("Hello"[0]=='e'?"True":"False") .PHP_EOL;
echo(strlen("Hello")==5?"True":"False") .PHP_EOL;
echo("Califolnia"[strlen("California")-1]=='i'?"True":"False") .PHP_EOL;

?>

<?php
//偶数かどうかチェックする関数
function isEven($x){
    //xを2で割った時の余りを計算します
    //余りが０の時、trueを返します
    return $x%2==0;
}

echo(isEven(10)?"True":"False") .PHP_EOL;
echo(isEven(11)?"True":"False") .PHP_EOL;
?>

<?php
//文字列の長さが5より大きいかどうかチェックします
function isLongerThan5($s){
    //s.lengthで文字列の長さを取得します
    return strlen($s)>5;
}

echo (isLongerThan5("abcdef")?"True":"False") .PHP_EOL;
echo (isLongerThan5("abcde")?"True":"False") .PHP_EOL;

?>

<?php
//国を文字列として受け取り、言語を返す関数
function languageSetting($country){
    //述語country=="Japan"がtrueの場合、以下の処理が実行されます
    if($country=="Japan"){
        return "ja";
    }
}

echo languageSetting("Japan") .PHP_EOL;
?>

<?php
//国を文字列として受け取り、言語を返す関数
function languageSettings($country){
    //述語country=="Japan"がtrueの場合、以下の処理が実行されます
    if($country=="Japan")return "ja";

    //if文の述語がfalseの時、以下の処理が実行されます
    else return "en";
}

echo languageSettings("Japan") .PHP_EOL;
echo languageSettings("China") .PHP_EOL;

?>

<?php
//国を文字列として受け取り、言語を返す関数
function languageSettingg($country){
    if($country=="Japan"){
        return "ja";
    }else if($country=="Russia"){
        return "ru";
    }else if($country=="Korea"){
        return "kr";
    }else{
        return "en";
    }
}

echo languageSettingg("Japan") .PHP_EOL;
echo languageSettingg("Russi") .PHP_EOL;
echo languageSettingg("Korea") .PHP_EOL;
echo languageSettingg("China") .PHP_EOL;

?>

<?php
//国を文字列として受け取り、言語を返す関数
function languageSettinggg($country){
    if($country=="Japan")return "ja";
    else if($country=="Russia") return "ru";
    else if($country=="Korea") return "kr";
    else return "en";
}

echo languageSettinggg("Japan") .PHP_EOL;
echo languageSettinggg("Russi") .PHP_EOL;
echo languageSettinggg("Korea") .PHP_EOL;
echo languageSettinggg("China") .PHP_EOL;
?>

<?php
//例題１
//ある映画は13歳以上しか閲覧できません。年齢によって閲覧制限をかける関数を作成してみましょう。
//年齢ageを入力として受け取り、それが 13以上かどうか、true,falseで判断する、canSeeMovieというかンスを作成します。

function canSeeMovie($age){
    if($age>=13) return true;
    else return false;
}

//関数の呼び出しをコンソールに出力します。
echo((int)canSeeMovie(20)) .PHP_EOL;
echo((int)canSeeMovie(10)) .PHP_EOL;

//例題
//年齢ageが20未満の場合、falseを返し、20歳以上ならtrueを返す、canDrinkSakeという関数を作成してください
//関数に21を入力して、echoで出力してください（true）
//関数に8を入力して、echoで出力してください（false）
 
function canDrinkSake($age){
    if($age>=20) return false;
    else return true;
}

echo ((int)canDrinkSake(21)) .PHP_EOL;
echo ((int)canDrinkSake(8)) .PHP_EOL;
?>

<?php
//例題2
//英単語wordを入力として受け取り、最初と最後のアルファベットを返す、firstLastCharacterという関数を作成します。
//もし何も英単語が入力されない場合は、”Type random words”と表示されます。

function firstLastCharacter($word){
    if(strlen($word)==0) return "Type random words";
    else return $word[0] . $word[strlen($word)-1];
}

//関数の呼び出しをコンソールに出力します
echo firstLastCharacter("") .PHP_EOL;
echo firstLastCharacter("lunch") .PHP_EOL;
echo firstLastCharacter("breakfast") .PHP_EOL;


//例題
//ランダムな英単語を受け取り、英単語の文字数をカウントする関数
//countWordという関数を作成してください
//もし、何も英単語が入力されなければ、−１を返します
//関数にhelloを入力して、echoで出力してください
//関数にGood Morningを入力して、echoで出力してください
//関数に空の文字列を入力して、echoで出力してください

function countWord($word){
    if(strlen($word)==0) return -1;
    else return strlen($word);
}
echo countWord("hello") .PHP_EOL;
echo countWord("Good Morning") .PHP_EOL;
echo countWord("") .PHP_EOL;
?>


<?php
//例題３
//支払い方法としてローンを選択すると利子が元の金額に上乗せされます。
//期日までに払われた場合、利子は２％で、払われなかった場合、利子は１５％になります。
//また、どちらの場合でも手数料は＄2.5かかります。
//ローンの金額initialLoan,期日までに払われたかどうかをブーリアンで表したdidPayTimeを入力として受け取り、
//合計金額を返すinterestsPaidという関数を作成してください

function interestsPaid($initalLoan,$didPayOnTime){
    //コード内で今後値が変わらない変数に対しては、定数を割り当てるようにしましょう
    $percentLate=1.15;
    $percentDefault=1.02;
    $serviceFee=2.5;
    $total=$initalLoan;

    //間に合った場合、デフォルトの利子
    if($didPayOnTime)$total=$total*$percentDefault;
    //遅れた場合、割高の利子
    else $total=$total*$percentLate;

    //トータルに＄2.5をプラスで請求します
    return $total+$serviceFee;
}

//関数の呼び出しをコンソールに出力します
echo interestsPaid(100,true) .PHP_EOL;
echo interestsPaid(100,false) .PHP_EOL;

?>

<?php
//例題4
//言語languageを入力として受け取り、選択された言語によって、www.example.orgのサブディレクトリにリダイレクトする、
//redirectionUrlという関数を作成します。
//たとえば、この関数ではjjapaneseが選択された時、www.example.prg/jaを返します。
//また、指定された言語に対応していない場合は、www.example.prg/を返します。

function redirectionUrl($language){
    $url="www.example.org/";

    if($language=="English")$url.= "en";
    else if($language=="Japanese")$url.= "ja";
    else if($language=="Spanish")$url.= "es";
    else if($language=="Russian")$url.= "ru";

    return $url;
}

//関数の呼び出しをコンソールに出力します
echo redirectionUrl("English") .PHP_EOL;
echo redirectionUrl("Japanese") .PHP_EOL;
echo redirectionUrl("Spanish") .PHP_EOL;
echo redirectionUrl("Russian") .PHP_EOL;

?>

<?php
function canRideRollerCoaster($age,$height){
    if($age>=8 && $height>=120) return true;
    else return false;
}

//関数の呼び出しの出力
echo (canRideRollerCoaster(9,140)?"True":"False") .PHP_EOL;
echo (canRideRollerCoaster(9,110)?"True":"False") .PHP_EOL;
echo (canRideRollerCoaster(6,110)?"True":"False") .PHP_EOL;
echo (canRideRollerCoaster(6,90)?"True":"False") .PHP_EOL;

//問題
//3の倍数の時fizz,5の倍数の時buzz,15の倍数の時、fizzbuzzと返す、echoという関数を作成してください
//これ以外の時は、NOT FOUND!と返して下さい。
function getNumber($number){
    if($number%3==0 && $number%5==0) return "fizzbuzz";
    else if($number%3==0) return "fizz";
    else if($number%5==0) return "buzz";
    else return "NOT FOUND";
}

echo getNumber(3) .PHP_EOL;
echo getNumber(5) .PHP_EOL;
echo getNumber(15) .PHP_EOL;
echo getNumber(67) .PHP_EOL;
?>


<?php
//phpが提供する関数は常に読み込まれています。
//https://www.php.net/manual/ja/ref.math.php

//小数点以下切り捨て
echo floor(3.6) .PHP_EOL;

//小数点以下切り上げ
echo ceil(3.6) .PHP_EOL;

//べき乗（累乗）を計算することができるpow関数
echo pow(3,5) .PHP_EOL;

function pythagoreanTheorem($a,$b){
    //sqrt関数を使うことができます
    return sqrt($a*$a+$b*$b);
}

echo pythagoreanTheorem(3,10) .PHP_EOL;

//例題１
//式3*4/5の結果に対して称す点以下の切り捨てを行い、出力して下さい
//式3*4/5の結果に対して小数点以下の切り上げを行い、出力して下さい

function number1($a,$b,$c){
    return floor($a*$b/$c);
}
echo number1(3,4,5) .PHP_EOL;

function number2($a,$b,$c){

    return ceil($a*$b/$c);
}
echo number2(3,4,5) .PHP_EOL;

//例題2
//直角三角形において、横、縦の長さを受け取って、斜辺の長さを返す、hypotenuseという関数をsqrt関数を使って、定義して下さい
//横4、高さ3を関数に入力して、コンソールに結果を出力してください

function hypotenuse($width,$height){
    return sqrt($width*$height/2);
}

echo hypotenuse(2,3) .PHP_EOL;

//例題3
//ある整数を受け取って、2^xを計算する、exponetialOfTwoという関数をpow関数を使って作成して下さい。
//3を関数に入力して、コンソールに結果を出力して下さい。
//10を関数に入力して、コンソールに結果を出力して下さい

function exponentialOfTwo($x){
    return pow(2,$x);
}

echo exponentialOfTwo(3) .PHP_EOL;
echo exponentialOfTwo(10) .PHP_EOL;

?>

<?php

$lastName="Albert";

//uppercase/lpwercase関数
//https://www.php.net/manual/ja/function.strtolower.php

echo strtoupper($lastName) .PHP_EOL; //ALBERT
echo strtolower($lastName) .PHP_EOL; //albert
echo strtolower("MAC") .PHP_EOL; //mac

//例題
//変数の中にある文字列をすべて大文字、小文字で表示してみましょう
$cityName="California";

//uppercase関数を使って、echoで出力してみましょう
//lowercase関数を使って、echoで出力してみましょう

echo strtoupper($cityName) .PHP_EOL;
echo strtolower($cityName) .PHP_EOL;

?>

<?php
$sentence="I will go hiking near a ranch in Oregon";
$sentence2="The ranch";

//substring関数
//i番目の次の文字からj文字分、文字列を返します
//２番目の次の文字から４文字分、文字列を返します

echo substr($sentence,2,4) .PHP_EOL;
echo substr($sentence,3,3) .PHP_EOL;
echo substr($sentence,7,strlen($sentence)-7) .PHP_EOL;
echo substr($sentence,2,8) .substr($sentence2,3,20) .PHP_EOL;


//例題１
//re-light@info.com の＠より後ろを切り取りましょう。
$email="re-light-lms@info.com";
//echo で出力して下さい

echo substr($email,12,strlen($email)-12) .PHP_EOL;

//例題２
//Steve JobsのJobsを切り取りましょう
//echoで出力して下さい
$name="Steve Jobs";
echo substr($name,5,5) .PHP_EOL;

?>

<?php
$sentence="I will go hiking near a ranch in Oregon";
$sentence2="The ranch";

//find関数
echo strpos($sentence,"Oregon") .PHP_EOL;
echo strpos($sentence2,"ranch") .PHP_EOL;
echo strpos($sentence,substr($sentence2,3,strlen($sentence2)-3)) .PHP_EOL;

//例題１
//re-light-lms@info.comも＠のインデックスの位置を調べましょう
$email="re-light-lms@info.com";
//echoで出力して下さい
echo strpos($email,"@") .PHP_EOL;

//例題２
//例題１で求めてインデックスを＠の位置として変数atLocationに入れましょう
//変数atLocation を使って、re-light-lms@info.comの＠より後ろを切り取りましょう
//echoで出力して下さい。

$atLocation=strpos($email,"@");
echo substr($email,$atLocation) .PHP_EOL;

?>

<?php
$lastName="Albert";
$sentence="I will go hiking near a ranch in Oregon.";
$sentence2="The ranch";
$bun="100人近くに人がいたが、ほとんど会ったことのある人たちだった。";

//replace関数
echo str_replace("Oregon","California",$sentence) .PHP_EOL;
echo str_replace("近く","ぐらい",$bun) .PHP_EOL;
echo str_replace("The",$lastName."'s",$sentence2) .PHP_EOL;

//すべての文字列を入れ替えます
echo str_replace("a","b","Aaaaahhh the ocean") .PHP_EOL;

//例題１
//文字列helloのすべてのlをpに置換して下さい
//echoで出力して下さい
$hello="Hello";
echo str_replace("l","p",$hello) .PHP_EOL;

//例題２
//変数sentenceの中にある文字列のiを、変数lastnameを使って置換して下さい
//echoで出力して下さい
echo str_replace("I",$lastName,$sentence) .PHP_EOL;

?>


