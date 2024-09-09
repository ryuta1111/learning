<?php
//問題1
//自然数n,kが与えられるので、nがkで何回割り切れるか返す、countDivisibleByKという関数を作成してください。
//例えば、28は2で割ると、14を2で割ると7なので、2で割った回数2を返します。
//ただし、kは2以上とします
function countDivisibleByK(int $n,int $k):int{
    //関数を完成させてください
    if(($n%$k)==0){
        //ベースケース
        return 1 + countDivisibleByK($n/$k,$k);
    }else{
        return 0;
    }
}
echo "問題1";
echo "<br>";
echo countDivisibleByK(3,2) .PHP_EOL;
echo "<br>";
echo countDivisibleByK(30,5) .PHP_EOL;
echo "<br>";
echo countDivisibleByK(10,2) .PHP_EOL;
echo "<br>";
echo countDivisibleByK(24,2) .PHP_EOL;
echo "<br>";
echo countDivisibleByK(243,3) .PHP_EOL;
echo "<br>";
echo countDivisibleByK(1024,2) .PHP_EOL;
echo "<br>";

?>

<br>

<?php
//問題2
//仮想通貨で大儲けしたLさんは、ビットコインとイーサリアムを、同じ枚数ずつできるだけ多くの人に配りたいと思いました。
//ビットコインとイーサリアムうの枚数がそれぞれx,yで与えられるので、配れる人数を返す、miximumPeopleという関数を作成してください。
//例えば、ビットコイン12枚とイーサリアム18枚を配る場合、ビットコインをビットコインをビットコインを６人に２枚ずつ、イーサリアムを６人に３枚ずつ配ることができます

function maximumPeople(int $x,int $y):int{
    if(($x%$y)==0){
        return $y;
    }else{
        return maximumPeople($y,$x%$y);
    }
}

echo "問題2";
echo "<br>";
echo maximumPeople(12,18) .PHP_EOL;
echo "<br>";
echo maximumPeople(30,242) .PHP_EOL;
echo "<br>";
echo maximumPeople(1029, 1071) .PHP_EOL;
echo "<br>";
echo maximumPeople(3180, 1908) .PHP_EOL;
echo "<br>";
?>

<br>


<?php
//問題3
//今所持金money円が財布の中にprice円のパンを買う計画をしています。
//パンの放送にはシールがついており、このパン屋ではそれをsticker枚集めることで、１つのパンと交換することができます。
//自然数money,price,stickerが与えられるので、購入できるパンの最大数を返す、
//maxBreadという関数を再起を使って作成してください
//ただし、sticker<=2とします
//例えば、money=10,price=2,sticker=3の時を考えてみましょう
//最初にパンを5個購入し、それによってシールを５枚取得します。
//その後、その中からシール３個を使ってパン１個を購入し、それによってシール１枚を取得します。
//最後に手持ちのシール３枚をパンと交換できるので、合計７個のパンを手に入れることができます。
function maxBread(int $money,int $price,int $sticker):int{
    //関数を完成させてください3
    //所持金から購入できるパンの個数
    $bread=floor($money/$price);

    //獲得できるシールの枚数は、購入できたパンの個数と等しくなる
    return maxBreadHelper($sticker,$bread,$bread);
}
//末尾最適化のために、パンの個数を追跡する引数breadを追加。
//シールの枚数を追跡する引数holdも追加。
//moneyとpriceはもう使わないため、引数から除く
function maxBreadHelper(int $sticker,int $bread,int $hold){
    //シールが交換不可能な場合、breadを返す
    if($sticker>$hold) return $bread;
    //交換可能な場合、交換できる分だけbreadの個数を増やし、holdの数を減らします。
    //また、新たに獲得したパンの数だけholdを増やします
    $newBread=floor($hold/$sticker);
    return maxBreadHelper($sticker,$bread+$newBread,$hold-$sticker*$newBread+$newBread);
}
echo "問題3";
echo "<br>";
echo maxBread(10,2,3) .PHP_EOL;
echo "<br>";
echo maxBread(15,1,3) .PHP_EOL;
echo "<br>";
echo maxBread(20,2,10) .PHP_EOL;
echo "<br>";
echo maxBread(50,3,2) .PHP_EOL;
echo "<br>";
echo maxBread(5,1,2) .PHP_EOL;
echo "<br>";
?>

<br>

<?php
//問題4
//thomasは図画工作で色紙を使って飛行機を作成しています。
//色紙には様々なサイズが用意されており、選択することができます。
//今、thomasは長方形の式子から整数値を１辺とする、できるだけ大きく、かつ同じ大きさの正方形を何枚も切り取ること計画しています。
//長方形の大きさとして、縦x、積yが与えられるので、正方形の合計枚数を返す、countSquareという関数を作成してください。
//ただし、入力x,yはどちらも整数とします。

function countSquare(int $x,int $y):int{
    //関数を完成させてください
    return $x*$y/pow(gcd($x,$y),2);
}

function gcd(int $x,int $y):int{
    if($x%$y==0){
        return $y;
    }else{
        return gcd($y,$x%$y);
    }

}

echo "問題4";
echo "<br>";
echo countSquare(28,32) .PHP_EOL;
echo "<br>";
echo countSquare(20,32) .PHP_EOL;
echo "<br>";
echo countSquare(8177,3315) .PHP_EOL;
echo "<br>";


?>

<br>

<?php
//問題5
//juanは小学一年生の息子に足し算を教える方法として、桁数を分解して、足し合わせるという方法を思いつきました。
//自然数digitsが与えられるので、桁数を分解して足し合わせる、splitAndAddという関数を再起を使って作成してください
//例えば、98は、9+8=17となり、9728は,9+7+2+8=26となります。
function splitAndAdd(int $digits):int{
    //関数を完成させてください
    if($digits<10){
        return $digits;
    }else{
        return $digits%10 + splitAndAdd(floor($digits/10));
    }
}
echo "問題5";
echo "<br>";
echo splitAndAdd(19) .PHP_EOL;
echo "<br>";
echo splitAndAdd(898) .PHP_EOL;
echo "<br>";
echo splitAndAdd(23387) .PHP_EOL;
echo "<br>";
echo splitAndAdd(1066) .PHP_EOL;
echo "<br>";
echo splitAndAdd(546125) .PHP_EOL;
echo "<br>";

?>
