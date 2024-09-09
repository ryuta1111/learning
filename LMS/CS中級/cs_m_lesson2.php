<?php
//最大公約数
function gcd($m,$n){
    if(($m%$n)==0){
        //ベースケース
        return $n;
    }else{
        return gcd($n,$m%$n);
    }
}
//44と242の最大公約数を求めます
echo gcd(44,242) .PHP_EOL;
echo "<br>";

//3355と2379の最大公約数を求めます
echo gcd(3355,2379) .PHP_EOL;
echo "<br>";
?>

<br>

<?php
//isSquareRootCloseEnough(a,b)は相対誤差を計算する関数です
//相対誤差が0.01％未満であれば、true、0.01以上であればfalseを返します
function isSquareRootCloseEnough($a,$b){

    //誤差|a-b|を計算するために、abs関数を使います。abs(x)はxの絶対値を返します。
    return 100*abs(($a-$b)/$b)<0.01;
}

//可動性を高めるために、近似値をguess,新しい近似値をnewGuessとします
function squareRootHelper($x,$guess){
    //新しい近似値は、２つの近似値の平均から求めます
    $newGuess=($guess+$x/$guess)/2;

    echo "guess:" .strval($guess) .PHP_EOL;
    echo "new guess:" .strval($newGuess) .PHP_EOL;

    //相対誤差が.0.01もマンであることがベースケースです
    if(isSquareRootCloseEnough($newGuess,$guess)) return $newGuess;

    //再起的に計算を繰り返します
    return squareRootHelper($x,($guess+$x/$guess)/2);
}

//平方根の近似値を繰り返します
function squareRoot($x){
    //近似値の初期値として１を設定します
    //因数を増やして、squareRootHelper関数で再起処理を行います
    return squareRootHelper($x,1);
}

//関数の呼び出し
//65の平方根を計算します
echo squareRoot(65) .PHP_EOL;

?>

<br>

<?php
//自然数nが与えられるので、nの約数のうち、n自信を除く最大の数値を返す関数
//例えば、12の約数は1,2,3,4,6,12であるが、これは、12を12,11,10,...,2,11で順に割って行き、割り切れたものの羅列である
//従って、nを固定して、n-1,n-2,n-2,...,東国変数が存在すれば良い
//因数を追加した補助関数を作成します
function getGreatestDivisor($n){
    //補助関数にn-1を因数として渡します
        return getGreatestDivisorHelper($n,$n-1);
}

//n/kが割り切れるか再起的にチェックする関数
function getGreatestdivisorHelper($n,$k){
    //nを大きい数字から割って行き、最初に割り切れたものが答え
    if($n%$k==0){
        return $k;
    }
    return getGreatestdivisorHelper($n,$k-1);
}

//12の約数は、1,2,3,4,6,12
echo getGreatestDivisor(12) .PHP_EOL;

//36の約数は、1,2,3,4,9,12,18,36
echo getGreatestDivisor(36) .PHP_EOL;