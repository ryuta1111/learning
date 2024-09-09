<?php
//問題１
//Mikeは卒業旅行の感じをすることになりました。話し合いの結果、卒業旅行ではロサンゼルスでairbnbに宿泊することに決定しました。
//Mikeは幹事なので事前に料金を計算して見積もりを発行する必要があります。
//人数peapleと宿泊日数dayが与えられるので、民泊の合計金額を返す、vacationRentalという関数を作成して下さい。
//この物件では、３泊以下の宿泊では1泊８０ドル、4泊以上では一泊60ドル、10泊以上では1泊50ドルになります。
// また清掃費として宿泊料金の１２％が加算され、全体の金額に８％の税金がかかります
//合計金額が小巣を含む場合、少数の切り捨てを行なって下さい

function vacationRental(int $people,int $day):int{
    //関数を完成させて下さい
    $cleanPay=1.12;
    $tax=1.08;
    if($day<=3)$fee=80;
    else if($day>=4 && $day<10)$fee=60;
    else if($day>=10)$fee=50;
    return floor((($fee*$cleanPay*$day*$people))*$tax);
}
echo vacationRental(2,3) .PHP_EOL;
echo vacationRental(2,4) .PHP_EOL;
echo vacationRental(12,10) .PHP_EOL;
?>

<?php
//問題２
//Taylerは友達から年利20％で10,000ドル借金をしています。そこで関すを開発することによって数年後に借金がどれほど膨らむのかシュミレーションすることにしました。
//年数yearが与えられるので、返済額を計算するhowMuchYourDebtという関数を作成して下さい。
//小数点以下は切り捨てとします。

function howMuchYourDebt($year){
    $tax=1.2;
    return floor(10000*pow($tax,$year));
}
echo howMuchYourDebt(2) .PHP_EOL;
echo howMuchYourDebt(5) .PHP_EOL;

?>

<?php
//問題3
//遊園地Dは入場者に対して整理券を配り、その番号の平方根が有利数の来場者を選び、特別バッジを与えることにしました。
//ある自然数numberが与えられるので、平方根が有理数かどうかを判断する、isRationalNumberという関数を作成して下さい。

function isRationalNumber(int $number):bool{
    //関数を完成させて下さい
    $x=sqrt($number);
    if($number==$x*$x) return true;
    else return false;   
}
echo (isRationalNumber(1) ?"True":"False") .PHP_EOL;
echo (isRationalNumber(2) ?"True":"False") .PHP_EOL;
echo (isRationalNumber(3) ?"True":"False") .PHP_EOL;
echo (isRationalNumber(4) ?"True":"False") .PHP_EOL;
echo (isRationalNumber(5) ?"True":"False") .PHP_EOL;
echo (isRationalNumber(9) ?"True":"False") .PHP_EOL;
?>

<?php
//問題4
//文字列stringを受け取り、同じ列を小文字で返す、toLowerCaseという関数を作成して下さい

function toLowerCase(string $stringInPut) :string{
    //関数を完成させて下さい
    return strtolower($stringInPut);
}

echo toLowerCase("HELLO") .PHP_EOL;
echo toLowerCase("Hiyoku") .PHP_EOL;
echo toLowerCase("Good Morning") .PHP_EOL;

?>

<?php
//問題5
//面倒くさがりのjohnは長い文章を読むことが何よりも嫌いです。そのため、文章の中に自分が知りたいキーワードが含まれているのか否かを瞬時に判定してくれるシステムを作ろうと思いました。
//文字列s1と文字列s2が与えられるので、その中にs２という文字列が含まれているのかを調べるisSbustringという関数を定義して下さい

function isSubstring(string $s1,string $s2) :bool{
    //関数を完成させて下さい
    if(strpos($s1,$s2)) return true;
    else return false;
}

echo (isSubstring("hello world" ,"world")?"True":"False") .PHP_EOL;
echo (isSubstring("hello world!" ,"d!rolw")?"True":"False") .PHP_EOL;
