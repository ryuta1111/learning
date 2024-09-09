<?php
//問題1
//Kateは音楽野外フェスを行うことになり、入場者の中から抽選でプレゼントを渡す企画を立てています。
//そこで、素数の値で入場した方を当選者とすることにしました。
//入場者番号numberが与えられるので、素数かどうか判定するisPrimeというかんすを作成してください。
function isPrime(int $number):bool{
    //関数を完成させてください

    if($number==1){
        return true;
    }else{
        for($i=2;$i<$number;$i++){
            if($number%$i===0){
                return false;
                break;
            }
        }
        if($i==$number){
            return true;
        }
    }

}


echo "問題1";
echo "<br>";
echo (isPrime(1) ?"True":"False") .PHP_EOL;
echo (isPrime(2) ?"True":"False") .PHP_EOL;
echo (isPrime(3) ?"True":"False") .PHP_EOL;
echo (isPrime(4) ?"True":"False") .PHP_EOL;
echo (isPrime(25) ?"True":"False") .PHP_EOL;
echo (isPrime(29) ?"True":"False") .PHP_EOL;
echo (isPrime(36) ?"True":"False") .PHP_EOL;
echo (isPrime(45) ?"True":"False") .PHP_EOL;
echo (isPrime(85) ?"True":"False") .PHP_EOL;
echo (isPrime(455) ?"True":"False") .PHP_EOL;
echo "<br>";


 ?>

 <br>

 <?php
 //問題2
 //R大学ではどの授業でも３回以上欠席すると、単位を取得できない精度です。
 //Participateを表すPとAbsenceを表すAによって構成される文字列stringが与えられるので、
 //単位取得可能であればpass、不可能であればfailを返す、douYouFailという関数を作成してください
function doYouFail(string $string):string{
    //関数を完成させてください
    $res = substr_count($string,"A");
    if($res<3){
        return "pass";
    }else{
        return "fail";
    }
}

echo "問題2";
echo "<br>";
echo doYouFail("AAPPAP") .PHP_EOL;
echo doYouFail("AAPPAA") .PHP_EOL;
echo doYouFail("PAPPA") .PHP_EOL;
echo "<br>";

 ?>

<br>

<?php
//問題3
//Janeは体育祭実行委員会に所属しておりクラスから複数人お手伝いを呼ばなければなりません。
//そこで、出席番号がある特定のアテ位で割り切れない人を呼ぼうと考えています。
//クラスに人数x、値yが与えられるので、お手伝いの出席番号を全て返す関数notDividedを作成してください。
//ただし(x,y)!=(1,1)とします
function notDivided(int $x,int $y){
    //関数を完成させてください
    for($i=1;$i<$x;$i++){
        if($i%$y!=0){
            echo $i . "-";
        }
    }
}

echo "問題3";
echo "<br>";
echo notDivided(20,3) .PHP_EOL;
echo "<br>";
echo notDivided(50,4) .PHP_EOL;
echo "<br>";
echo notDivided(100,2) .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題4
//Francisはイギリスで小学生に楽しく割り算を教えるためにFizzBuzzゲームを作りました。
//このゲームでは以下の制約があります。
//3の倍数の時にFizzと声を出す
//5の倍数の時にBuzzと声を出す
//3と5両方で割り切れる場合はFizzBuzzと声に出す
//自然数nが与えられるので、１からnまで全ての数字及び、fizz,buzz,fizzbuzzという関数を作成してください。
function fizzBuzz(int $n){
    //関数を完成させてください
    $i=1;
    while($i<=$n){
        if($i%3==0 && $i%5==0){
            echo "FizzBuzz". "-";
        }else if($i%3==0){
            echo "Fizz". "-";
        }else if($i%5==0){
            echo "Buzz". "-";
        }
        echo $i . "-";
        $i++;

    }
}

echo "問題4";
echo "<br>";
echo fizzBuzz(7) .PHP_EOL;
echo "<br>";
echo fizzBuzz(16) .PHP_EOL;
echo "<br>";
echo fizzBuzz(30) .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題5
//Bayerは、6と6以外の約数1,2,3を全てを足した値が一致することに気がつきました。
//他にもあるのではないかと思い、同様の値を見つけようとしています。
//自然数nが与えられるので、1からnのうちperfect number(自然数nと、その数自身を除く自然数nの約数を全て足し上げたものが一致する値)を返す、
//perfectNumberListという関数を作成してください
//perfectが存在しない場合は、noneと返してください
function perfectNumberList(int $n):string{
    //関数を完成させてください
    $total=0;
    for($i=1;$i<$n;$i++){
        if($n%$i==0){
            $total+=$i;
        }
    }
    if($n%$total==0){
        return $total . "-";
    }else{
        return "none";
    }
    
}

echo "問題5";
echo "<br>";
echo perfectNumberList(3) .PHP_EOL;
echo "<br>";
echo perfectNumberList(6) .PHP_EOL;
echo "<br>";
echo perfectNumberList(28) .PHP_EOL;
echo "<br>";
echo perfectNumberList(100) .PHP_EOL;
echo "<br>";
echo perfectNumberList(496) .PHP_EOL;
echo "<br>";
echo perfectNumberList(1000) .PHP_EOL;
echo "<br>";
echo perfectNumberList(10000) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//問題6
//Jackはあある会社に入社し、新しい社員IDを発行することになりました。
//IDは数字のみで作られ、必ず回文でなければならないという制約がついています。
//新しいIDである自然数nが与えられるので、それが回文になっているかどうかを調べるisPalindromeIntegerという関数を作成してください
function isPalindromeInteger(int $n):bool{
    //関数を完成させてください
    if($n==strrev($n)){
        return true;
    }else{
        return false;
    }
    
}

echo "問題6";
echo "<br>";
echo (isPalindromeInteger(12222) ?"True":"False") .PHP_EOL;
echo (isPalindromeInteger(12321) ?"True":"False") .PHP_EOL;
echo (isPalindromeInteger(22782) ?"True":"False") .PHP_EOL;
echo (isPalindromeInteger(18981) ?"True":"False") .PHP_EOL;
echo (isPalindromeInteger(1) ?"True":"False") .PHP_EOL;
echo (isPalindromeInteger(987923) ?"True":"False") .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//問題7
//ある国は長く存続できたことに感謝を込め、国民に給付金を渡そうと考えました。
//そこで、建国から経過した年数nまでに含まれている、全ての素数を足した数を給付金にする予定です。
//自然数nが与えられるので、給付金の額を返すsumOfAllPrimesという関数を作成してください


?>

<br>

<?php
//問題8
//Zaynは2進数しか使えない世界は飛ばされてしまったため、自動で10進数を２真数へ変えるプログラムを作ることにしました。
//正の10進数decNumberが与えられるので、2進数に置き換えるdecimalToBinaryという関数を作成してください
function decimalToBinary(int $decNumber):string{
    $nisin=[]; //2進数を格納する配列

    //2進数に変換する
    $pos=0;
    while($decNumber>0){
        $nisin[$pos] = $decNumber%2;
        $decNumber=floor($decNumber/2);
        $pos++;
    }

    $pos--;
    while($pos>=0){
        $x=print_r($nisin[$pos]);
        $pos--;
    }
    return $x;

}

echo "問題8";
echo "<br>";
echo decimalToBinary(60) .PHP_EOL;
echo "<br>";
echo decimalToBinary(26) .PHP_EOL;
echo "<br>";
echo decimalToBinary(35) .PHP_EOL;
echo "<br>";
echo decimalToBinary(100) .PHP_EOL;
echo "<br>";
echo decimalToBinary(505) .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題9
//Zaynは16進数しか使えない世界へ飛ばされてしまったため、自動で10進数を16真数へ変えるプログラムを作ることにしました。
//正の10進数decNumberが与えられるので、16進数に書き換えるdecimalToHexadecimalという関数を作成してください
function decimalToHexadecimal(int $decNumber):string{
    return dechex($decNumber);
}

echo "問題9";
echo "<br>";
echo decimalToHexadecimal(532354) .PHP_EOL;
echo "<br>";
echo decimalToHexadecimal(90304) .PHP_EOL;
echo "<br>";
echo decimalToHexadecimal(28394) .PHP_EOL;
echo "<br>";
echo decimalToHexadecimal(15) .PHP_EOL;
echo "<br>";
echo decimalToHexadecimal(74) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//問題10
//Chanは宿題で、2進数で1の補数を求めるプログラム作成を課されました。
//2進数bitsが与えられるので1の補数を返す、oneComplementという関数を作成してください
function oneComplement(string $bits):string{
    //関数を作成してください
    $x= intval($bits)-decbin(pow(2,strlen($bits))-1);
    return $x;
}

echo "問題10";
echo "<br>";
echo oneComplement("00011100") .PHP_EOL;
echo "<br>";
echo oneComplement("10010") .PHP_EOL;
echo "<br>";
echo oneComplement("001001") .PHP_EOL;
echo "<br>";
echo oneComplement("0111010") .PHP_EOL;
echo "<br>";
echo oneComplement("1") .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題11
//Chanは宿題で、2進数で2の歩数を求めるプログラム作成を課されました。
//2進数bitsが与えられるので2の歩数を返す、twosComplementという関数を作成してください。
//ただし入力の2進数は8ビットとします。
//通常、回路はオーバーフローしたビットを保持することはできないですが、
//今回は00000000の2の補数の最上位ビットを出力に含めてください
function twosComplement(string $bits):string{
    $x=decbin(pow(2,strlen($bits)))-intval($bits);
    return $x;
}

echo "問題11";
echo "<br>";
echo twosComplement("00000000") .PHP_EOL;
echo "<br>";
echo twosComplement("00000010") .PHP_EOL;
echo "<br>";
echo twosComplement("11111111") .PHP_EOL;
echo "<br>";
echo twosComplement("01110101") .PHP_EOL;
echo "<br>";
echo twosComplement("00000001") .PHP_EOL;
echo "<br>";
echo twosComplement("10000000") .PHP_EOL;
echo "<br>";
echo twosComplement("10101010") .PHP_EOL;
echo "<br>";
echo twosComplement("11111110") .PHP_EOL;
echo "<br>";

?>
