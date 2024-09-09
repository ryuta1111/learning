<?php
//問題１
//3の累乗nが与えられるので、整数nを3で助産できる回数を返す、
//divideBy3Countという関数を作成してください
function divideBy3Count(int $n):int{
    //関数を完成させてください
    if($n<3){
        return 0;
    }else{
        return 1+divideBy3Count(intdiv($n,3));
    }
}

echo "問題1";
echo "<br>";
echo divideBy3Count(1) .PHP_EOL;
echo "<br>";
echo divideBy3Count(3) .PHP_EOL;
echo "<br>";
echo divideBy3Count(27) .PHP_EOL;
echo "<br>";
echo divideBy3Count(729) .PHP_EOL;
echo "<br>";
echo divideBy3Count(6561) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//天才小学生のjuliaちゃんは学校で出された約数を求める問題に対して1問1問因数分解するのが面倒に感じたため、
//独自でプログラムを開発することにしました。
//ある数値numberが与えられるので、numberの約数を小さい順に返すdivisorという関数を再起を使って定義してください
function divisor(int $number):string{
    //関数を完成させてください
    return divisorHelper($number,1);
}

function divisorHelper($number,$n){
    if($n>$number){
        return "";
    }
    if($number%$n==0){
        return strval($n) . "-" . divisorHelper($number,$n+1);
    }else{
        return divisorHelper($number,$n+1);
    }
}

echo "問題2";
echo "<br>";
echo divisor(28) .PHP_EOL;
echo "<br>";
echo divisor(29) .PHP_EOL;
echo "<br>";
echo divisor(720) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//問題3
//kathyは現在価格goalMoneyドルの土地の購入するために、年利interest(0<interest<100)%の金融商品にcapitalMoneyドル投資しようと計画しています。
//goalMoney,interest,capitalMoneyが与えられるので、何年後に土地の購入ができるかを返す、howLongToReachFundGoalという関数を再起によって作成してください
//なお、毎年得られた利益は同商品に再投資するとし、土地の価格は経過する年数が偶数（０を含む）の時は2%、奇数のときは3％上昇します。
//また、人の寿命は80未満と仮定し、80年以上かかる時は80としてください
function howLongToReachFundGoal(int $capitalMoney,int $goalMoney,int $interest):int{
    //関数を完成させてください
    return howLongToReachFundGoalHelper($capitalMoney,$goalMoney,$interest,0);
}

function howLongToReachFundGoalHelper(float $capitalMoney,float $goalMoney,float $interest,int $year){
    //capitalMOneyがgoalMoney以上になったら計金を返す
    if($capitalMoney>=$goalMoney) return $year;

    //80年以上経過した場合80を返す
    if($year>=80) return 80;

    //経過年が偶数の年は2％、奇数の年は3％増加させる
    if($year%2==0) $goalMoney *= 1.02;
        else $goalMoney *= 1.03;

    //capitalMoneyに年利を加える
    $capitalMoney *= (1+$interest/100);

    //yearに1を加えて再起を行う
    return howLongToReachFundGoalHelper($capitalMoney,$goalMoney,$interest,$year+1);

}

echo "問題3";
echo "<br>";
echo howLongToReachFundGoal(5421,10421,5) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(5421,30,30) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(600,10400,7) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(32555,5200000,12) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(50,35000,65) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(10,35000,2) .PHP_EOL;
echo "<br>";
echo howLongToReachFundGoal(20000,10050000,30) .PHP_EOL;
echo "<br>";
?>

<br>

<?php

//問題４
//ackは魔法使いから貰った豆を裏庭に植えて昼寝をしました。
//昼寝から目覚めて裏庭を確認するとその豆は巨木へと成長し、雲の上にある巨人の城に辿り着くまでに大きさになっていました。
//豆を観察すると、以下の条件で1秒ずつ成長することがわかりました。
//f(0)=0
//f(1)=1
//f(n)=f(n-1)+f(n-2)(m>=2)
//整数nが与えられるので、n秒後の木の高さを求める,fibonacciという関数を作成してください
function fibonacci($n){
    if($n==0){
        return 0;
    }else if($n==1){ 
        return 1;
    }else{
    return fibonacci($n-1)+fibonacci($n-2);
    }
}

echo "問題4";
echo "<br>";
echo fibonacci(5) .PHP_EOL;
echo "<br>";
echo fibonacci(9) .PHP_EOL;
echo "<br>";
echo fibonacci(10) .PHP_EOL;
echo "<br>";
echo fibonacci(19) .PHP_EOL;
echo "<br>";



?>

<br>

<?php
//問題５
//自然数digits(0<digits<1015)が与えられるので、数字を1桁ずつ分解して、それぞれの値を合計し、その値が1桁になるまで同じ作業を繰り返した時、
//それぞれの合計とを足し合わせて得られる値を返す、recursiveDigitsAddedという関数を再起を使って作成してください。
//例えば、56622943の場合、1桁ずつ分解することによって、4+5+6+2+2+9+4+3=35となりますが、値が1桁ではないので、もう１度35=3+5=8のように分解します。
//最後にそれぞれ足し合わせて8+35=43となります。
//99999999999884の場合は、9+9+9+9+9+9+9+9+9+9+9+8+8+4=119となり、その後1+1+9=11となるので、119+11+2=132となります。
function recursiveDigitsAdded(int $digits):int{
    //関数を完成させてください
    $split=str_split($digits,1);
    $sub=array_sum($split);

    if($sub<10){
        return $sub;
    }else{
        return $sub+recursiveDigitsAdded(array_sum(str_split($digits,1)));
    }
}
    


echo "問題5";
echo "<br>";
echo recursiveDigitsAdded(5) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(8) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(12) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(98) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(3528) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(99999999999884) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(5462) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(45622943) .PHP_EOL;
echo "<br>";
echo recursiveDigitsAdded(9514599) .PHP_EOL;
echo "<br>";




?>

<br>

