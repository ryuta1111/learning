<?php
//問題1
//あるブーリアン値pとqが与えられるので、pとqが等しくない時にtrueを返し、等しい時にはfalseを返す、myXORという関数を作成して下さい

function myXOR(bool $p,bool $q):bool{
    //関数を完成させて下さい
    if($p!=$q) return true;
    else if($p==$q) return false;
}

echo (myXOR(true,false) ?"True":"False").PHP_EOL;
echo (myXOR(true,true) ?"True":"False").PHP_EOL;

?>

<?php
//問題2
//高さheightと幅widthが与えられるので、デバイスの向きを返す、
//screennViewModeという関数を定義して下さい。
//もし、高さが幅以上の場合、portraitを返し、それ以外の場合ではlandscapeを返します

function screenViewMode(int $height,int $width):string{
    //関数を完成させて下さい
    if($height>$width) return "portrait";
    else if($height<$width) return "landscape";
}

echo screenViewMode(100,50) .PHP_EOL;
echo screenViewMode(50,100) .PHP_EOL;

?>

<?php
//問題3
//stephanieの家では残念ながら毎年サンタクロースは家にプレゼントを運んで来ません。
//毎年プレゼントを待ちながら、日付を観察するとサンタクロースが家に来るのは閏年だとわかりました。
//あるとしyearが与えられるので、閏年かどうかを判定する、isLeapYearという関数を作成して下さい。
//閏年の条件は以下の通りです。
//４で割り切れる
//100で割り切れるは場合は、閏年にしない
//例外として400で割り切れる場合は、閏年とする

function isLeapYear(int $year):bool{
    //関数を完成させて下さい
    if($year%4==0) return true;
    else if($year%400==0) return true;
    else if($year%100==0) return false;
    else return false;
}

echo (isLeapYear(2000) ?"True":"False") .PHP_EOL;
echo (isLeapYear(2011) ?"True":"False") .PHP_EOL;
echo (isLeapYear(2012) ?"True":"False") .PHP_EOL;

?>

<?php
//問題4
//css bootstrapは４つのクラスを持つグリッドシステムを使っています。
//これを利用すれば、Webページをユーザーのデバイスに最適化して表示することができます。
//スクリーンサイズscreenWidthが与えられるので、適切なcssクラスを文字鉄で返す、getbootstrapclassという関数を作成して下さい、
//スクリーンサイズは自然数としてプログラムを作成して下しださい
//xsスマホサイズ（スクリーン幅７６８px未満）
//smタブレットサイズ（スクリーン幅７６８px以上）
//mdノートパソコンサイズ（スクリーン幅９９２px以上）
//lgデスクトップサイズ（スクリーン幅１２００px以上）

function getBootstrapClass(int $screenWidth):string{
    //関数を完成させて下さい
    if($screenWidth<768) return "xsスマホサイズ";
    else if($screenWidth>=768 && $screenWidth<992) return "smタブレットサイズ";
    else if($screenWidth>=992 && $screenWidth<1200) return "mdノートパソコンサイズ";
    else if($screenWidth>=1200) return "lgデスクトップサイズ";
}

echo getBootstrapClass(340) .PHP_EOL;
echo getBootstrapClass(800) .PHP_EOL;
echo getBootstrapClass(1000) .PHP_EOL;
echo getBootstrapClass(1350) .PHP_EOL;
?>

<?php
//問題5
//frigeは明日学校があるのかわかっていません。祝日または土日の場合、基本的に学校はありません。
//明日の曜日dayとその日が祝日かどうかを表すブーリアン値isHoliday(祝日ならtrue,そうでないならfalse)が与えられるので、
//学校があるか判定するisThereSchoolという関数を作成して下さい

function isThereSchool(string $day,bool $isHoliday):bool{
    //関数を完成させて下さい
    if($day=="Monday"&&$isHoliday==true) return false;
    else if($day=="Monday"&&$isHoliday==false) return true;
    else if($day=="Tuesday"&&$isHoliday==true) return false;
    else if($day=="Tuesday"&&$isHoliday==false) return true;
    else if($day=="Wednesday"&&$isHoliday==true) return false;
    else if($day=="Wednesday"&&$isHoliday==false) return true;
    else if($day=="Thursday"&&$isHoliday==true) return false;
    else if($day=="Thursday"&&$isHoliday==false) return true;
    else if($day=="Friday"&&$isHoliday==true) return false;
    else if($day=="Friday"&&$isHoliday==false) return true;
    else if($day=="Saturday"&&$isHoliday==true) return false;
    else if($day=="Saturday"&&$isHoliday==false) return false;
    else if($day=="Sunday"&&$isHoliday==true) return false;
    else if($day=="Sunday"&&$isHoliday==false) return false;
}

echo (isThereSchool("Sunday" ,true)?"True":"False") .PHP_EOL;
echo (isThereSchool("Saturday" ,true)?"True":"False") .PHP_EOL;
echo (isThereSchool("Saturday" ,false)?"True":"False") .PHP_EOL;
echo (isThereSchool("Sunday" ,false)?"True":"False") .PHP_EOL;
echo (isThereSchool("Monday" ,true)?"True":"False") .PHP_EOL;
echo (isThereSchool("Monday" ,false)?"True":"False") .PHP_EOL;

?>

<?php
//j航空では機内食を個人の好みに合わせて選択することができ、オーダーは個々の座席に備え付けてあるディスプレイから受け付けます。
//乗客はまずメインディッシュとしてビーフかチキンのどちらかを選び、その後ドリンクについてもコーヒーかお茶のどちらか一方を選びます。
//注文はメインディッシュ、ドリンクを各々必ず一つだけ含めないといけませんが、サラダの有無については問いません。
//乗客の注文beef,chicken,salad,coffee,teaがブーリアン値で与えられるので、オーダーが妥当か判定する、canProcessOrderという関数を作成して下さい。

function canProcessOrder(bool $beef,bool $chicken,bool $salad,bool $coffee,bool $tea):bool{
    //関数を完成させて下さい。
    if($beef==true && $chicken==false && $salad==true && $coffee==true && $tea==false) return true;
    else if($beef==false && $chicken==true && $salad==true && $coffee==false && $tea==true) return true;
    else if($beef==true && $chicken==false && $salad==false && $coffee==true && $tea==false) return true;
    else if($beef==false && $chicken==true && $salad==false && $coffee==false && $tea==true) return true;
    else return false;
    
}

echo (canProcessOrder(false,false,true,false,true) ?"True":"False") .PHP_EOL;
echo (canProcessOrder(false,true,true,false,true) ?"True":"False") .PHP_EOL;


